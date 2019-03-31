


#1. 到 lihi 短網址後台找 api key 金鑰 
#2. 把下方的 7bKRlQTAFjf0Bs4qN25hM0rvTOrCgxtiXeUXXXXX 取代成你的 api key 
#3. 把下方的 https://google.com 取代成你的長網址


#1. Find your lihi api key in admin backend
#2. Replace 7bKRlQTAFjf0Bs4qN25hM0rvTOrCgxtiXeUXXXXX to your api key
#3. Replace https://google.com to your long url


OkHttpClient client = new OkHttpClient();

MediaType mediaType = MediaType.parse("application/json");
RequestBody body = RequestBody.create(mediaType, "{\n\t\"longUrl\": \"https://google.com\"\n}");
Request request = new Request.Builder()
  .url("https://app.lihi.io/api/v1/url")
  .post(body)
  .addHeader("Authorization", "x-api-key:7bKRlQTAFjf0Bs4qN25hM0rvTOrCgxtiXeUXXXXX") // change api-key
  .addHeader("Content-Type", "application/json")
  .addHeader("cache-control", "no-cache")
  .build();

Response response = client.newCall(request).execute();