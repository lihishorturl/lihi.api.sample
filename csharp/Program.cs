using System;
using RestSharp;

namespace csharp
{
    class Program
    {
        static void Main(string[] args)
        {
            var client = new RestClient("https://app.lihi.io/api/v1/url");
            var request = new RestRequest(Method.POST);
            request.AddHeader("cache-control", "no-cache");

            // replace key: 7bKs4qN25hM0rvTRlQTAFjf0BOrCgxtiXeU5kUlL
            request.AddHeader("Authorization", "x-api-key:7bKs4qN25hM0rvTRlQTAFjf0BOrCgxtiXeU5kUlL");
            request.AddHeader("Content-Type", "application/x-www-form-urlencoded");

            // replace your longUrl: http%3A%2F%2Flihi.io%2F
            request.AddParameter("undefined", "longUrl=http%3A%2F%2Flihi.io%2F&tags=office", ParameterType.RequestBody);
            IRestResponse response = client.Execute(request);
            Console.WriteLine(response.Content);
        }
    }
}
