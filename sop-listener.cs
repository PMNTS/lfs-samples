IDictionary<string, string> map = new Dictionary<string, string>();

// Iterate over posted params and store
foreach(string key in Request.QueryString.Keys) {
   map.Add(key, Request.QueryString[key]);
}

// Store map of post paras in session
Session["responseMap"] = map;
