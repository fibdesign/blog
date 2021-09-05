# Articles

{% api-method method="get" host="http://127.0.0.1:8000" path="/apiClient/articles?=page=1" %}
{% api-method-summary %}
Get Articles
{% endapi-method-summary %}

{% api-method-description %}
Articles are paginated. to get meta tags and pagination options, add `page`parameter as a query.  
By default pagination limited by showing `15` articles. You can change the limitation by adding this value to your `.env` :  
FIBDESIGN\_BLOG\_ARTICLE\_PER\_PAGE = 15
{% endapi-method-description %}

{% api-method-spec %}
{% api-method-request %}
{% api-method-headers %}
{% api-method-parameter name="Accept" type="string" %}
application/json
{% endapi-method-parameter %}
{% endapi-method-headers %}

{% api-method-query-parameters %}
{% api-method-parameter name="page" type="number" required=false %}
1
{% endapi-method-parameter %}
{% endapi-method-query-parameters %}
{% endapi-method-request %}

{% api-method-response %}
{% api-method-response-example httpCode=200 %}
{% api-method-response-example-description %}
the "data" resualt are ordered by latest.
{% endapi-method-response-example-description %}

```javascript
{
    "data": [
        {
            "id": 1,
            "title": "Lorem Ipsome number",
            "subtitle": "this is a short description",
            "thumbnail": "https://example.com/image.jpg",
            "registered": "2 weeks ago",
            "category": {
                "id": 1,
                "label": "label"
            }
        },
        .
        .
        .
    ],
    "links": {
        "first": "http://127.0.0.1:8000/apiClient/articles?page=1",
        "last": "http://127.0.0.1:8000/apiClient/articles?page=3",
        "prev": null,
        "next": "http://127.0.0.1:8000/apiClient/articles?page=2"
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "last_page": 3,
        "links": [
            {
                "url": null,
                "label": "&laquo; Previous",
                "active": false
            },
            {
                "url": "http://127.0.0.1:8000/apiClient/articles?page=1",
                "label": "1",
                "active": true
            },
            {
                "url": "http://127.0.0.1:8000/apiClient/articles?page=2",
                "label": "2",
                "active": false
            },
            {
                "url": "http://127.0.0.1:8000/apiClient/articles?page=3",
                "label": "3",
                "active": false
            },
            {
                "url": "http://127.0.0.1:8000/apiClient/articles?page=2",
                "label": "Next &raquo;",
                "active": false
            }
        ],
        "path": "http://127.0.0.1:8000/apiClient/articles",
        "per_page": 15,
        "to": 15,
        "total": 45
    }
}
```
{% endapi-method-response-example %}
{% endapi-method-response %}
{% endapi-method-spec %}
{% endapi-method %}

