public User getUser(String token) throws Exception {
 final String domain = "https://merchant-api.epicentrm.com.ua";
 final String path = "/v1/my/user";
 UriComponentsBuilder builder = UriComponentsBuilder
   .fromHttpUrl(domain)
   .path(path);
 String url = builder.build().toUriString();

 HttpHeaders headers = new HttpHeaders();
 headers.setAccept(List.of(MediaType.APPLICATION_JSON));
 headers.setContentType(MediaType.APPLICATION_JSON);
 headers.setBearerAuth(token);

 HttpEntity<Object> httpEntity = new HttpEntity<>(headers);
 ResponseEntity<User> response;
 try {
  response = restTemplate.exchange(
    url,
    HttpMethod.GET,
    httpEntity,
    new ParameterizedTypeReference<User>() {});
 } catch (Exception e) {
  throw new Exception("Error while receiving user");
 }

 return response.getBody();
}