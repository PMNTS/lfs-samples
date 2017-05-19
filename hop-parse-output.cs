// A new array to store the final parameters
String[] finalParams;
// Split the DecryptedResponse string on the hat (^) charater
String[] parts = DecryptedResponse.Split("^", StringSplitOptions.None);

String pairString = "";
String[] pair;

// Iterate over each parts and..
for (int i = 0; i < parts.Length; i++)
    // ..split again on the equals (=) character
    pair = parts[i].split("=");
    // Store the key and value in the array
    finalParams[pair[0]] = pair[1];
}
