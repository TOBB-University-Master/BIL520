# BIL520

## Web Application Vulnerability Scanner ##

Bu proje TOBB Üniversitesi BIL520 dersi için hazırlanmıştır. 

Projenin amacı web uygulamalarında `SQL Injection`, `XSS` ve `CSRF` zafiyetleri olmak üzere açıkların tespit edilmesi ve zafiyetler hakkında JSON formatında bilgilendirmedir.

Projenin 2 ana parçası bulunmaktadır.
- StudentSystem
- Vulnerability Scanner

### StudentSystem
Zafiyetli web sitesini temsil etmektedir ve php ile yazılmıştır. 

### VulnerabilityScanner
VulnerabilityScanner dosyası altında Spring projesi bulunmaktadır. 

Vulnerability Scanner ile zafiyetli uygulamaya istekler (request) gönderilere hangi zafiyetlere açığı olduğu cevabı verecektir.
