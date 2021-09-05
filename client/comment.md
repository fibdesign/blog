# Comment

{% hint style="warning" %}
To store a comment, no needs to Register  or Login.
{% endhint %}

{% api-method method="post" host="http://127.0.0.1:8000" path="/apiClient/articles/{article}/comments" %}
{% api-method-summary %}
Post Comment
{% endapi-method-summary %}

{% api-method-description %}
This endpoint allows you to store new Comment.
{% endapi-method-description %}

{% api-method-spec %}
{% api-method-request %}
{% api-method-path-parameters %}
{% api-method-parameter name="article" type="number" %}
ID of the article. \(controller using Model Bining\)
{% endapi-method-parameter %}
{% endapi-method-path-parameters %}

{% api-method-headers %}
{% api-method-parameter name="Accept" type="string" %}
application/json
{% endapi-method-parameter %}
{% endapi-method-headers %}

{% api-method-form-data-parameters %}
{% api-method-parameter name="name" type="string" required=true %}
Jhon Doe
{% endapi-method-parameter %}

{% api-method-parameter name="content" type="string" required=true %}
A great feedback
{% endapi-method-parameter %}
{% endapi-method-form-data-parameters %}
{% endapi-method-request %}

{% api-method-response %}
{% api-method-response-example httpCode=200 %}
{% api-method-response-example-description %}

{% endapi-method-response-example-description %}

```javascript
{
    "name": "example name",
    "content": "example content",
    "registered": "1 ثانیه پیش"
}
```
{% endapi-method-response-example %}

{% api-method-response-example httpCode=422 %}
{% api-method-response-example-description %}
Validation failed
{% endapi-method-response-example-description %}

```javascript
{
    "message": "اعتبار سنجی ورودی های داده شده نا موفقت بود. ",
    "errors": {
        "name": [ "تکمیل  نام الزامی است" ],
        "content": [ "تکمیل  محتوا الزامی است" ]
    }
}
```
{% endapi-method-response-example %}
{% endapi-method-response %}
{% endapi-method-spec %}
{% endapi-method %}



