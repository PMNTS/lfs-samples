Map map = (Map) session.getAttribute("responseMap");
boolean verified = verifyTransactionSignature(map);
