using System;
using EncryptLibrary; 
using System.Collections.Generic;
using System.IO;

String output = Request.Querystring["eapps_merchantData"];
// Store the hopData paramater in a session variable to use later
String encrypted_hopData_param = Request.Querystring["eapps_hopData"];

String keyFilePath = "/path/to/file/keyfile.key";

IDictionary outputDecrypted = null; 
try {
   outputDecrypted = ResponseProcessor.generateResponse(output, keyFile);
   foreach(KeyValuePair entry in outputDecrypted) {
		Console.WriteLine("entry.key= " + entry.Key +" and entry.value= "+entry.Value);
   }
} catch(Exception ex) {
   Console.WriteLine("Exception is="+ex.StackTrace);
}
