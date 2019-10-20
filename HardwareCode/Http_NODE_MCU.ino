#include <ESP8266WiFi.h>
#include <ESP8266HTTPClient.h>
#include <ArduinoJson.h>

const char* ssid = "AndroidAP";
const char* password = "ahsanshah11";

void setup() 
{
  Serial.begin(115200); //serial port baud rate serial port ko inititalize kerti ha serial.begin();
  WiFi.begin(ssid, password); //wifi port ko inititalize kerti ha WiFi.begin();

  while (WiFi.status() != WL_CONNECTED) 
  {
    delay(1000);
    Serial.println("Connecting...");
    
  }
  Serial.println("Successfully Connected...");
  Serial.print("NodeMCU IP Address : ");
  Serial.println(WiFi.localIP());
}

void loop() 
{
  if (WiFi.status() == WL_CONNECTED) 
  {
    HTTPClient http; //Object of class HTTPClient
    http.begin("http://jsonplaceholder.typicode.com/users/1"); 
    int httpCode = http.GET(); 

    if (httpCode > 0) 
    {
      Serial.println("");
      Serial.println("Calling API to test the connectivity of Wifi...");
      Serial.println("Fetching API response data...");
      delay(1500);
      Serial.println("Printing response...");
      Serial.println("");
      const size_t bufferSize = JSON_OBJECT_SIZE(2) + JSON_OBJECT_SIZE(3) + JSON_OBJECT_SIZE(5) + JSON_OBJECT_SIZE(8) + 370;
      DynamicJsonBuffer jsonBuffer(bufferSize);
      JsonObject& root = jsonBuffer.parseObject(http.getString()); 
      
      int id = root["id"]; 
      const char* name = root["name"]; 
      const char* username = root["username"]; 
      const char* email = root["email"]; 

      Serial.print("Name:");
      Serial.println(name);
      Serial.print("Username:");
      Serial.println(username);
      Serial.print("Email:");
      Serial.println(email);
    }
    http.end(); //Close connection
  }   
  delay(10000);
}
