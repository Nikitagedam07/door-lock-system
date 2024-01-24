#include <SPI.h>
#include <MFRC522.h>
#include <WiFi.h>
#include <MySQL_Connection.h>
#include <MySQL_Cursor.h>

// Define the pins for the RFID reader 
#define SS_PIN 5
#define RST_PIN 22

// Define the database credentials
IPAddress server_addr(127,0,0,1); // IP address of the MySQL server
char user[] = "root"; // MySQL username
char password[] = ""; // MySQL password
char db_name[] = "miniprj"; // MySQL database name

MFRC522 mfrc522(SS_PIN, RST_PIN); // Create an instance of the RFID reader

WiFiClient client; // Create a WiFi client
MySQL_Connection conn(&client); // Create a MySQL connection object
MySQL_Cursor *cursor;

void setup() {
  Serial.begin(9600); // Start serial communication
  SPI.begin(); // Initialize SPI bus
  mfrc522.PCD_Init(); // Initialize the RFID reader
  WiFi.begin("ssid", "password"); // Connect to WiFi network
  
  while (WiFi.status() != WL_CONNECTED) { // Wait for WiFi connection
    delay(1000);
    Serial.println("Connecting to WiFi...");
  }

  Serial.println("Connected to WiFi");
  Serial.println("Connecting to database...");

  if (conn.connect(server_addr, 3306, user, password, db_name)) { // Connect to database
    Serial.println("Connected to database");
  } else {
    Serial.println("Failed to connect to database");
    while (1);
  }

  cursor = new MySQL_Cursor(&conn); // Create a MySQL cursor
}

void loop() {
  if (mfrc522.PICC_IsNewCardPresent() && mfrc522.PICC_ReadCardSerial()) { // Check if a new card is present
    String uid = ""; // Create a string to store the UID of the card
    for (byte i = 0; i < mfrc522.uid.size; i++) { // Loop through each byte of the UID
      uid.concat(String(mfrc522.uid.uidByte[i] < 0x10 ? "0" : "")); // Add leading zero if necessary
      uid.concat(String(mfrc522.uid.uidByte[i], HEX)); // Convert byte to hexadecimal string
    }

    Serial.println("UID: " + uid);

    String query = "SELECT temp.status FROM temp JOIN original_records ON temp.uid = original_records.uid WHERE original_records.rfid = '" + uid + "' AND temp.status = 'active'";

    cursor->execute(query); // Execute the query
    MySQL_Row row = cursor->get_next_row(); // Get the next row from the result set

    if (row.length() > 0) { // Check if a row was returned
      String status = row.get_string(0); // Get the value of the status column
      Serial.println("Status: " + status);

      if (status == "active") { // Check if the status is active
        Serial.println("Unlocking door");
        // Code to unlock the door goes here
      } else {
        Serial.println("User status is not active");
      }
    } else {
      Serial.println("User not found in database");
    }
  }

  mfrc522.PICC_HaltA(); // Halt the current card
 mfrc522.PCD_StopCrypto1();

