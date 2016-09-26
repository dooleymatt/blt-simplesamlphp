<?php
/**
 * SAML 2.0 remote IdP metadata for SimpleSAMLphp.
 *
 * Remember to remove the IdPs you don't use from this file.
 *
 * See: https://simplesamlphp.org/docs/stable/simplesamlphp-reference-idp-remote
 */

$metadata['http://voyaidp.local/simplesaml/saml2/idp/metadata.php'] = array (

  'metadata-set' => 'saml20-idp-remote',
  'entityid' => 'http://voyaidp.local/simplesaml/saml2/idp/metadata.php',
  'SingleSignOnService' =>
    array (
      0 =>
        array (
          'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
          'Location' => 'http://voyaidp.local/simplesaml/saml2/idp/SSOService.php',
        ),
    ),
  'SingleLogoutService' =>
    array (
      0 =>
        array (
          'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
          'Location' => 'http://voyaidp.local/simplesaml/saml2/idp/SingleLogoutService.php',
        ),
    ),
  'certData' => 'MIIEWjCCA0KgAwIBAgIJAO7ZAPwwJxIcMA0GCSqGSIb3DQEBBQUAMHsxCzAJBgNVBAYTAlVTMRMwEQYDVQQIEwpTb21lLVN0YXRlMSEwHwYDVQQKExhJbnRlcm5ldCBXaWRnaXRzIFB0eSBMdGQxDTALBgNVBAMTBFZpZHAxJTAjBgkqhkiG9w0BCQEWFm1hdHQuZG9vbGV5QGFjcXVpYS5jb20wHhcNMTYwMzMwMTMwNzA1WhcNMjYwMzMwMTMwNzA1WjB7MQswCQYDVQQGEwJVUzETMBEGA1UECBMKU29tZS1TdGF0ZTEhMB8GA1UEChMYSW50ZXJuZXQgV2lkZ2l0cyBQdHkgTHRkMQ0wCwYDVQQDEwRWaWRwMSUwIwYJKoZIhvcNAQkBFhZtYXR0LmRvb2xleUBhY3F1aWEuY29tMIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAy8FeAz1VdypoGZFJo0+yazi+jiygvh0WbUzV97s7AOE6z+dLSAFBoTvGnJTKNyDbQh2ABSfye4h2PKBs1sXN5vUG+KJ8g/QLtPBjmKHAJh5P/0/MVuUiU3DmW2CSt2KYnuf5I6bmrWyilbS2D0tJaarLyVRbpwQeX8g0Y7fJHNnv3WfvfR2f/C5hAeNC32WoIK0lgBiAwpE7lPP+HI1QuieKmQUdEwatq1n+CaIYfYJCXrYyJpEBEtkvNXFUocJQITbrk5GgrK1ent2hR8SXR47IsryS5fiJXUXG5tF/oa2YX+uHUTfJB+XnQaJ+4FTB8TSj9W3duvuXQeZCkrOU5wIDAQABo4HgMIHdMB0GA1UdDgQWBBQGeOJctbR40MzFoGD0IRdK2P9mtTCBrQYDVR0jBIGlMIGigBQGeOJctbR40MzFoGD0IRdK2P9mtaF/pH0wezELMAkGA1UEBhMCVVMxEzARBgNVBAgTClNvbWUtU3RhdGUxITAfBgNVBAoTGEludGVybmV0IFdpZGdpdHMgUHR5IEx0ZDENMAsGA1UEAxMEVmlkcDElMCMGCSqGSIb3DQEJARYWbWF0dC5kb29sZXlAYWNxdWlhLmNvbYIJAO7ZAPwwJxIcMAwGA1UdEwQFMAMBAf8wDQYJKoZIhvcNAQEFBQADggEBADti75bYYu461hczGKRd0AHlS9R/s8IJtkNQ8eBOojdjMKU1kAzcVGKGrAhWTKGfFnEN/YPQQYkhVkiWm7GX/Kl2nct0nSVHrsFdJ0cbZE6glG8sqgQy1FPnKA2lIjtyXaNB72ar0UsAaSkf86vE5Mc6gEO9JSjC/Pquk5AY3+3f8savvEdO6VMgqUpsZhxNcm7tvPXzhEKUoeN3EM0fPjxqHenp2kFwzGIiQd0k4I4GXhSP7/CYlbFU9z3mfisC4x2h00lIoCTA0Cg5FEE9wc6g/DMmsZvq1yW0k9cLeUhGfa87BkiRn2baOc10+p8Tho0p2l7yzbONP9lNKWcvZFk=',
  'NameIDFormat' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
);
