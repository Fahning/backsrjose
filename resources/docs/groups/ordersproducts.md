# OrdersProducts

APIs para gerenciar OrdersProducts

## Retorna todas as comandas e produtos.




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/ordersproduct/all" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/ordersproduct/all"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json
{
    "data": [
        {
            "id": 2,
            "quantity": 2,
            "product_id": 3,
            "order_id": 2,
            "created_at": "2021-03-27T14:32:11.000000Z",
            "updated_at": "2021-03-27T14:32:11.000000Z",
            "price": null,
            "product": {
                "id": 3,
                "name": "Cerveja",
                "price": 8.9,
                "created_at": "2021-03-27T14:31:47.000000Z",
                "updated_at": "2021-03-27T14:31:47.000000Z"
            },
            "order": null
        },
        {
            "id": 3,
            "quantity": 2,
            "product_id": 6,
            "order_id": 13,
            "created_at": "2021-03-27T21:00:36.000000Z",
            "updated_at": "2021-03-27T21:00:36.000000Z",
            "price": null,
            "product": {
                "id": 6,
                "name": "Cerveja2",
                "price": 8.9,
                "created_at": "2021-03-27T14:31:47.000000Z",
                "updated_at": "2021-03-27T14:31:47.000000Z"
            },
            "order": null
        },
        {
            "id": 4,
            "quantity": 3,
            "product_id": 9,
            "order_id": 13,
            "created_at": "2021-03-27T21:00:36.000000Z",
            "updated_at": "2021-03-27T21:00:36.000000Z",
            "price": null,
            "product": {
                "id": 9,
                "name": "Cerveja5",
                "price": 8.9,
                "created_at": "2021-03-27T14:31:47.000000Z",
                "updated_at": "2021-03-27T14:31:47.000000Z"
            },
            "order": null
        },
        {
            "id": 5,
            "quantity": 5,
            "product_id": 12,
            "order_id": 13,
            "created_at": "2021-03-27T21:00:36.000000Z",
            "updated_at": "2021-03-27T21:00:36.000000Z",
            "price": null,
            "product": {
                "id": 12,
                "name": "Cerveja8",
                "price": 8.9,
                "created_at": "2021-03-27T14:31:47.000000Z",
                "updated_at": "2021-03-27T14:31:47.000000Z"
            },
            "order": null
        },
        {
            "id": 15,
            "quantity": 2,
            "product_id": 6,
            "order_id": 17,
            "created_at": "2021-03-27T21:09:09.000000Z",
            "updated_at": "2021-03-27T21:09:09.000000Z",
            "price": 8.9,
            "product": {
                "id": 6,
                "name": "Cerveja2",
                "price": 8.9,
                "created_at": "2021-03-27T14:31:47.000000Z",
                "updated_at": "2021-03-27T14:31:47.000000Z"
            },
            "order": null
        },
        {
            "id": 16,
            "quantity": 3,
            "product_id": 9,
            "order_id": 17,
            "created_at": "2021-03-27T21:09:09.000000Z",
            "updated_at": "2021-03-27T21:09:09.000000Z",
            "price": 8.9,
            "product": {
                "id": 9,
                "name": "Cerveja5",
                "price": 8.9,
                "created_at": "2021-03-27T14:31:47.000000Z",
                "updated_at": "2021-03-27T14:31:47.000000Z"
            },
            "order": null
        },
        {
            "id": 17,
            "quantity": 5,
            "product_id": 12,
            "order_id": 17,
            "created_at": "2021-03-27T21:09:10.000000Z",
            "updated_at": "2021-03-27T21:09:10.000000Z",
            "price": 8.9,
            "product": {
                "id": 12,
                "name": "Cerveja8",
                "price": 8.9,
                "created_at": "2021-03-27T14:31:47.000000Z",
                "updated_at": "2021-03-27T14:31:47.000000Z"
            },
            "order": null
        },
        {
            "id": 21,
            "quantity": 2,
            "product_id": 6,
            "order_id": 19,
            "created_at": "2021-03-27T21:12:30.000000Z",
            "updated_at": "2021-03-27T21:12:30.000000Z",
            "price": 8.9,
            "product": {
                "id": 6,
                "name": "Cerveja2",
                "price": 8.9,
                "created_at": "2021-03-27T14:31:47.000000Z",
                "updated_at": "2021-03-27T14:31:47.000000Z"
            },
            "order": null
        },
        {
            "id": 22,
            "quantity": 3,
            "product_id": 9,
            "order_id": 19,
            "created_at": "2021-03-27T21:12:30.000000Z",
            "updated_at": "2021-03-27T21:12:30.000000Z",
            "price": 8.9,
            "product": {
                "id": 9,
                "name": "Cerveja5",
                "price": 8.9,
                "created_at": "2021-03-27T14:31:47.000000Z",
                "updated_at": "2021-03-27T14:31:47.000000Z"
            },
            "order": null
        },
        {
            "id": 23,
            "quantity": 5,
            "product_id": 12,
            "order_id": 19,
            "created_at": "2021-03-27T21:12:30.000000Z",
            "updated_at": "2021-03-27T21:12:30.000000Z",
            "price": 8.9,
            "product": {
                "id": 12,
                "name": "Cerveja8",
                "price": 8.9,
                "created_at": "2021-03-27T14:31:47.000000Z",
                "updated_at": "2021-03-27T14:31:47.000000Z"
            },
            "order": null
        },
        {
            "id": 24,
            "quantity": 2,
            "product_id": 6,
            "order_id": 20,
            "created_at": "2021-03-27T21:13:55.000000Z",
            "updated_at": "2021-03-27T21:13:55.000000Z",
            "price": 8.9,
            "product": {
                "id": 6,
                "name": "Cerveja2",
                "price": 8.9,
                "created_at": "2021-03-27T14:31:47.000000Z",
                "updated_at": "2021-03-27T14:31:47.000000Z"
            },
            "order": null
        },
        {
            "id": 25,
            "quantity": 3,
            "product_id": 9,
            "order_id": 20,
            "created_at": "2021-03-27T21:13:55.000000Z",
            "updated_at": "2021-03-27T21:13:55.000000Z",
            "price": 8.9,
            "product": {
                "id": 9,
                "name": "Cerveja5",
                "price": 8.9,
                "created_at": "2021-03-27T14:31:47.000000Z",
                "updated_at": "2021-03-27T14:31:47.000000Z"
            },
            "order": null
        },
        {
            "id": 26,
            "quantity": 5,
            "product_id": 12,
            "order_id": 20,
            "created_at": "2021-03-27T21:13:55.000000Z",
            "updated_at": "2021-03-27T21:13:55.000000Z",
            "price": 8.9,
            "product": {
                "id": 12,
                "name": "Cerveja8",
                "price": 8.9,
                "created_at": "2021-03-27T14:31:47.000000Z",
                "updated_at": "2021-03-27T14:31:47.000000Z"
            },
            "order": null
        },
        {
            "id": 27,
            "quantity": 3,
            "product_id": 10,
            "order_id": 21,
            "created_at": "2021-03-27T21:15:12.000000Z",
            "updated_at": "2021-03-27T21:15:12.000000Z",
            "price": 8.9,
            "product": {
                "id": 10,
                "name": "Cerveja6",
                "price": 8.9,
                "created_at": "2021-03-27T14:31:47.000000Z",
                "updated_at": "2021-03-27T14:31:47.000000Z"
            },
            "order": null
        },
        {
            "id": 28,
            "quantity": 2,
            "product_id": 9,
            "order_id": 21,
            "created_at": "2021-03-27T21:15:12.000000Z",
            "updated_at": "2021-03-27T21:15:12.000000Z",
            "price": 8.9,
            "product": {
                "id": 9,
                "name": "Cerveja5",
                "price": 8.9,
                "created_at": "2021-03-27T14:31:47.000000Z",
                "updated_at": "2021-03-27T14:31:47.000000Z"
            },
            "order": null
        },
        {
            "id": 29,
            "quantity": 3,
            "product_id": 10,
            "order_id": 22,
            "created_at": "2021-03-27T21:15:22.000000Z",
            "updated_at": "2021-03-27T21:15:22.000000Z",
            "price": 8.9,
            "product": {
                "id": 10,
                "name": "Cerveja6",
                "price": 8.9,
                "created_at": "2021-03-27T14:31:47.000000Z",
                "updated_at": "2021-03-27T14:31:47.000000Z"
            },
            "order": null
        },
        {
            "id": 30,
            "quantity": 2,
            "product_id": 9,
            "order_id": 22,
            "created_at": "2021-03-27T21:15:22.000000Z",
            "updated_at": "2021-03-27T21:15:22.000000Z",
            "price": 8.9,
            "product": {
                "id": 9,
                "name": "Cerveja5",
                "price": 8.9,
                "created_at": "2021-03-27T14:31:47.000000Z",
                "updated_at": "2021-03-27T14:31:47.000000Z"
            },
            "order": null
        },
        {
            "id": 31,
            "quantity": 3,
            "product_id": 10,
            "order_id": 23,
            "created_at": "2021-03-27T21:15:30.000000Z",
            "updated_at": "2021-03-27T21:15:30.000000Z",
            "price": 8.9,
            "product": {
                "id": 10,
                "name": "Cerveja6",
                "price": 8.9,
                "created_at": "2021-03-27T14:31:47.000000Z",
                "updated_at": "2021-03-27T14:31:47.000000Z"
            },
            "order": null
        },
        {
            "id": 32,
            "quantity": 2,
            "product_id": 9,
            "order_id": 23,
            "created_at": "2021-03-27T21:15:30.000000Z",
            "updated_at": "2021-03-27T21:15:30.000000Z",
            "price": 8.9,
            "product": {
                "id": 9,
                "name": "Cerveja5",
                "price": 8.9,
                "created_at": "2021-03-27T14:31:47.000000Z",
                "updated_at": "2021-03-27T14:31:47.000000Z"
            },
            "order": null
        },
        {
            "id": 33,
            "quantity": 5,
            "product_id": 8,
            "order_id": 23,
            "created_at": "2021-03-27T21:15:30.000000Z",
            "updated_at": "2021-03-27T21:15:30.000000Z",
            "price": 8.9,
            "product": {
                "id": 8,
                "name": "Cerveja4",
                "price": 8.9,
                "created_at": "2021-03-27T14:31:47.000000Z",
                "updated_at": "2021-03-27T14:31:47.000000Z"
            },
            "order": null
        },
        {
            "id": 34,
            "quantity": 1,
            "product_id": 10,
            "order_id": 24,
            "created_at": "2021-03-27T21:15:55.000000Z",
            "updated_at": "2021-03-27T21:15:55.000000Z",
            "price": 8.9,
            "product": {
                "id": 10,
                "name": "Cerveja6",
                "price": 8.9,
                "created_at": "2021-03-27T14:31:47.000000Z",
                "updated_at": "2021-03-27T14:31:47.000000Z"
            },
            "order": null
        },
        {
            "id": 35,
            "quantity": 1,
            "product_id": 10,
            "order_id": 25,
            "created_at": "2021-03-27T21:16:03.000000Z",
            "updated_at": "2021-03-27T21:16:03.000000Z",
            "price": 8.9,
            "product": {
                "id": 10,
                "name": "Cerveja6",
                "price": 8.9,
                "created_at": "2021-03-27T14:31:47.000000Z",
                "updated_at": "2021-03-27T14:31:47.000000Z"
            },
            "order": null
        },
        {
            "id": 36,
            "quantity": 9,
            "product_id": 9,
            "order_id": 25,
            "created_at": "2021-03-27T21:16:03.000000Z",
            "updated_at": "2021-03-27T21:16:03.000000Z",
            "price": 8.9,
            "product": {
                "id": 9,
                "name": "Cerveja5",
                "price": 8.9,
                "created_at": "2021-03-27T14:31:47.000000Z",
                "updated_at": "2021-03-27T14:31:47.000000Z"
            },
            "order": null
        },
        {
            "id": 37,
            "quantity": 9,
            "product_id": 9,
            "order_id": 26,
            "created_at": "2021-03-27T21:16:47.000000Z",
            "updated_at": "2021-03-27T21:16:47.000000Z",
            "price": 8.9,
            "product": {
                "id": 9,
                "name": "Cerveja5",
                "price": 8.9,
                "created_at": "2021-03-27T14:31:47.000000Z",
                "updated_at": "2021-03-27T14:31:47.000000Z"
            },
            "order": null
        },
        {
            "id": 38,
            "quantity": 1,
            "product_id": 10,
            "order_id": 26,
            "created_at": "2021-03-27T21:16:47.000000Z",
            "updated_at": "2021-03-27T21:16:47.000000Z",
            "price": 8.9,
            "product": {
                "id": 10,
                "name": "Cerveja6",
                "price": 8.9,
                "created_at": "2021-03-27T14:31:47.000000Z",
                "updated_at": "2021-03-27T14:31:47.000000Z"
            },
            "order": null
        },
        {
            "id": 39,
            "quantity": 9,
            "product_id": 9,
            "order_id": 27,
            "created_at": "2021-03-27T21:20:24.000000Z",
            "updated_at": "2021-03-27T21:20:24.000000Z",
            "price": 8.9,
            "product": {
                "id": 9,
                "name": "Cerveja5",
                "price": 8.9,
                "created_at": "2021-03-27T14:31:47.000000Z",
                "updated_at": "2021-03-27T14:31:47.000000Z"
            },
            "order": null
        },
        {
            "id": 40,
            "quantity": 1,
            "product_id": 10,
            "order_id": 27,
            "created_at": "2021-03-27T21:20:24.000000Z",
            "updated_at": "2021-03-27T21:20:24.000000Z",
            "price": 8.9,
            "product": {
                "id": 10,
                "name": "Cerveja6",
                "price": 8.9,
                "created_at": "2021-03-27T14:31:47.000000Z",
                "updated_at": "2021-03-27T14:31:47.000000Z"
            },
            "order": null
        },
        {
            "id": 41,
            "quantity": 2,
            "product_id": 10,
            "order_id": 28,
            "created_at": "2021-03-27T21:35:53.000000Z",
            "updated_at": "2021-03-27T21:35:53.000000Z",
            "price": 8.9,
            "product": {
                "id": 10,
                "name": "Cerveja6",
                "price": 8.9,
                "created_at": "2021-03-27T14:31:47.000000Z",
                "updated_at": "2021-03-27T14:31:47.000000Z"
            },
            "order": null
        },
        {
            "id": 42,
            "quantity": 2,
            "product_id": 9,
            "order_id": 29,
            "created_at": "2021-03-27T22:27:20.000000Z",
            "updated_at": "2021-03-27T22:27:20.000000Z",
            "price": 8.9,
            "product": {
                "id": 9,
                "name": "Cerveja5",
                "price": 8.9,
                "created_at": "2021-03-27T14:31:47.000000Z",
                "updated_at": "2021-03-27T14:31:47.000000Z"
            },
            "order": null
        },
        {
            "id": 43,
            "quantity": 2,
            "product_id": 12,
            "order_id": 30,
            "created_at": "2021-03-27T22:28:23.000000Z",
            "updated_at": "2021-03-27T22:28:23.000000Z",
            "price": 8.9,
            "product": {
                "id": 12,
                "name": "Cerveja8",
                "price": 8.9,
                "created_at": "2021-03-27T14:31:47.000000Z",
                "updated_at": "2021-03-27T14:31:47.000000Z"
            },
            "order": null
        },
        {
            "id": 44,
            "quantity": 2,
            "product_id": 10,
            "order_id": 31,
            "created_at": "2021-03-27T22:59:14.000000Z",
            "updated_at": "2021-03-27T22:59:14.000000Z",
            "price": 8.9,
            "product": {
                "id": 10,
                "name": "Cerveja6",
                "price": 8.9,
                "created_at": "2021-03-27T14:31:47.000000Z",
                "updated_at": "2021-03-27T14:31:47.000000Z"
            },
            "order": null
        },
        {
            "id": 45,
            "quantity": 3,
            "product_id": 12,
            "order_id": 31,
            "created_at": "2021-03-27T22:59:14.000000Z",
            "updated_at": "2021-03-27T22:59:14.000000Z",
            "price": 8.9,
            "product": {
                "id": 12,
                "name": "Cerveja8",
                "price": 8.9,
                "created_at": "2021-03-27T14:31:47.000000Z",
                "updated_at": "2021-03-27T14:31:47.000000Z"
            },
            "order": null
        },
        {
            "id": 46,
            "quantity": 2,
            "product_id": 10,
            "order_id": 32,
            "created_at": "2021-03-27T23:01:14.000000Z",
            "updated_at": "2021-03-27T23:01:14.000000Z",
            "price": 8.9,
            "product": {
                "id": 10,
                "name": "Cerveja6",
                "price": 8.9,
                "created_at": "2021-03-27T14:31:47.000000Z",
                "updated_at": "2021-03-27T14:31:47.000000Z"
            },
            "order": null
        },
        {
            "id": 47,
            "quantity": 3,
            "product_id": 12,
            "order_id": 32,
            "created_at": "2021-03-27T23:01:14.000000Z",
            "updated_at": "2021-03-27T23:01:14.000000Z",
            "price": 8.9,
            "product": {
                "id": 12,
                "name": "Cerveja8",
                "price": 8.9,
                "created_at": "2021-03-27T14:31:47.000000Z",
                "updated_at": "2021-03-27T14:31:47.000000Z"
            },
            "order": null
        },
        {
            "id": 48,
            "quantity": 2,
            "product_id": 10,
            "order_id": 33,
            "created_at": "2021-03-27T23:01:30.000000Z",
            "updated_at": "2021-03-27T23:01:30.000000Z",
            "price": 8.9,
            "product": {
                "id": 10,
                "name": "Cerveja6",
                "price": 8.9,
                "created_at": "2021-03-27T14:31:47.000000Z",
                "updated_at": "2021-03-27T14:31:47.000000Z"
            },
            "order": null
        },
        {
            "id": 49,
            "quantity": 3,
            "product_id": 12,
            "order_id": 33,
            "created_at": "2021-03-27T23:01:30.000000Z",
            "updated_at": "2021-03-27T23:01:30.000000Z",
            "price": 8.9,
            "product": {
                "id": 12,
                "name": "Cerveja8",
                "price": 8.9,
                "created_at": "2021-03-27T14:31:47.000000Z",
                "updated_at": "2021-03-27T14:31:47.000000Z"
            },
            "order": null
        },
        {
            "id": 50,
            "quantity": 2,
            "product_id": 10,
            "order_id": 34,
            "created_at": "2021-03-27T23:02:08.000000Z",
            "updated_at": "2021-03-27T23:02:08.000000Z",
            "price": 8.9,
            "product": {
                "id": 10,
                "name": "Cerveja6",
                "price": 8.9,
                "created_at": "2021-03-27T14:31:47.000000Z",
                "updated_at": "2021-03-27T14:31:47.000000Z"
            },
            "order": null
        },
        {
            "id": 51,
            "quantity": 3,
            "product_id": 12,
            "order_id": 34,
            "created_at": "2021-03-27T23:02:08.000000Z",
            "updated_at": "2021-03-27T23:02:08.000000Z",
            "price": 8.9,
            "product": {
                "id": 12,
                "name": "Cerveja8",
                "price": 8.9,
                "created_at": "2021-03-27T14:31:47.000000Z",
                "updated_at": "2021-03-27T14:31:47.000000Z"
            },
            "order": null
        },
        {
            "id": 52,
            "quantity": 2,
            "product_id": 10,
            "order_id": 35,
            "created_at": "2021-03-27T23:02:52.000000Z",
            "updated_at": "2021-03-27T23:02:52.000000Z",
            "price": 8.9,
            "product": {
                "id": 10,
                "name": "Cerveja6",
                "price": 8.9,
                "created_at": "2021-03-27T14:31:47.000000Z",
                "updated_at": "2021-03-27T14:31:47.000000Z"
            },
            "order": null
        },
        {
            "id": 53,
            "quantity": 3,
            "product_id": 12,
            "order_id": 35,
            "created_at": "2021-03-27T23:02:52.000000Z",
            "updated_at": "2021-03-27T23:02:52.000000Z",
            "price": 8.9,
            "product": {
                "id": 12,
                "name": "Cerveja8",
                "price": 8.9,
                "created_at": "2021-03-27T14:31:47.000000Z",
                "updated_at": "2021-03-27T14:31:47.000000Z"
            },
            "order": null
        },
        {
            "id": 54,
            "quantity": 2,
            "product_id": 10,
            "order_id": 36,
            "created_at": "2021-03-27T23:03:52.000000Z",
            "updated_at": "2021-03-27T23:03:52.000000Z",
            "price": 8.9,
            "product": {
                "id": 10,
                "name": "Cerveja6",
                "price": 8.9,
                "created_at": "2021-03-27T14:31:47.000000Z",
                "updated_at": "2021-03-27T14:31:47.000000Z"
            },
            "order": null
        },
        {
            "id": 55,
            "quantity": 3,
            "product_id": 12,
            "order_id": 36,
            "created_at": "2021-03-27T23:03:52.000000Z",
            "updated_at": "2021-03-27T23:03:52.000000Z",
            "price": 8.9,
            "product": {
                "id": 12,
                "name": "Cerveja8",
                "price": 8.9,
                "created_at": "2021-03-27T14:31:47.000000Z",
                "updated_at": "2021-03-27T14:31:47.000000Z"
            },
            "order": null
        },
        {
            "id": 56,
            "quantity": 23,
            "product_id": 8,
            "order_id": 37,
            "created_at": "2021-03-27T23:36:06.000000Z",
            "updated_at": "2021-03-27T23:36:06.000000Z",
            "price": 8.9,
            "product": {
                "id": 8,
                "name": "Cerveja4",
                "price": 8.9,
                "created_at": "2021-03-27T14:31:47.000000Z",
                "updated_at": "2021-03-27T14:31:47.000000Z"
            },
            "order": null
        },
        {
            "id": 57,
            "quantity": 23,
            "product_id": 9,
            "order_id": 37,
            "created_at": "2021-03-27T23:36:06.000000Z",
            "updated_at": "2021-03-27T23:36:06.000000Z",
            "price": 8.9,
            "product": {
                "id": 9,
                "name": "Cerveja5",
                "price": 8.9,
                "created_at": "2021-03-27T14:31:47.000000Z",
                "updated_at": "2021-03-27T14:31:47.000000Z"
            },
            "order": null
        },
        {
            "id": 58,
            "quantity": 23,
            "product_id": 8,
            "order_id": 38,
            "created_at": "2021-03-27T23:37:01.000000Z",
            "updated_at": "2021-03-27T23:37:01.000000Z",
            "price": 8.9,
            "product": {
                "id": 8,
                "name": "Cerveja4",
                "price": 8.9,
                "created_at": "2021-03-27T14:31:47.000000Z",
                "updated_at": "2021-03-27T14:31:47.000000Z"
            },
            "order": null
        },
        {
            "id": 59,
            "quantity": 23,
            "product_id": 9,
            "order_id": 38,
            "created_at": "2021-03-27T23:37:01.000000Z",
            "updated_at": "2021-03-27T23:37:01.000000Z",
            "price": 8.9,
            "product": {
                "id": 9,
                "name": "Cerveja5",
                "price": 8.9,
                "created_at": "2021-03-27T14:31:47.000000Z",
                "updated_at": "2021-03-27T14:31:47.000000Z"
            },
            "order": null
        },
        {
            "id": 60,
            "quantity": 2,
            "product_id": 4,
            "order_id": 39,
            "created_at": "2021-03-27T23:44:03.000000Z",
            "updated_at": "2021-03-27T23:44:03.000000Z",
            "price": 8.9,
            "product": {
                "id": 4,
                "name": "Cerveja",
                "price": 8.9,
                "created_at": "2021-03-27T14:31:47.000000Z",
                "updated_at": "2021-03-27T14:31:47.000000Z"
            },
            "order": null
        },
        {
            "id": 61,
            "quantity": 3,
            "product_id": 9,
            "order_id": 39,
            "created_at": "2021-03-27T23:44:03.000000Z",
            "updated_at": "2021-03-27T23:44:03.000000Z",
            "price": 8.9,
            "product": {
                "id": 9,
                "name": "Cerveja5",
                "price": 8.9,
                "created_at": "2021-03-27T14:31:47.000000Z",
                "updated_at": "2021-03-27T14:31:47.000000Z"
            },
            "order": null
        },
        {
            "id": 62,
            "quantity": 2,
            "product_id": 5,
            "order_id": 40,
            "created_at": "2021-03-27T23:48:01.000000Z",
            "updated_at": "2021-03-27T23:48:01.000000Z",
            "price": 8.9,
            "product": {
                "id": 5,
                "name": "Cerveja0",
                "price": 8.9,
                "created_at": "2021-03-27T14:31:47.000000Z",
                "updated_at": "2021-03-27T14:31:47.000000Z"
            },
            "order": null
        },
        {
            "id": 63,
            "quantity": 2,
            "product_id": 9,
            "order_id": 41,
            "created_at": "2021-03-27T23:50:47.000000Z",
            "updated_at": "2021-03-27T23:50:47.000000Z",
            "price": 8.9,
            "product": {
                "id": 9,
                "name": "Cerveja5",
                "price": 8.9,
                "created_at": "2021-03-27T14:31:47.000000Z",
                "updated_at": "2021-03-27T14:31:47.000000Z"
            },
            "order": null
        },
        {
            "id": 64,
            "quantity": 23,
            "product_id": 4,
            "order_id": 42,
            "created_at": "2021-03-28T02:06:17.000000Z",
            "updated_at": "2021-03-28T02:06:17.000000Z",
            "price": 8.9,
            "product": {
                "id": 4,
                "name": "Cerveja",
                "price": 8.9,
                "created_at": "2021-03-27T14:31:47.000000Z",
                "updated_at": "2021-03-27T14:31:47.000000Z"
            },
            "order": {
                "id": 42,
                "total": 204.7,
                "discount": 0,
                "commission": 0,
                "commands": "0",
                "client_id": 13,
                "waiter_id": 2,
                "created_at": "2021-03-28T02:06:17.000000Z",
                "updated_at": "2021-03-28T02:06:17.000000Z"
            }
        },
        {
            "id": 65,
            "quantity": 2,
            "product_id": 9,
            "order_id": 44,
            "created_at": "2021-03-28T03:30:59.000000Z",
            "updated_at": "2021-03-28T03:30:59.000000Z",
            "price": 8.9,
            "product": {
                "id": 9,
                "name": "Cerveja5",
                "price": 8.9,
                "created_at": "2021-03-27T14:31:47.000000Z",
                "updated_at": "2021-03-27T14:31:47.000000Z"
            },
            "order": {
                "id": 44,
                "total": 26.7,
                "discount": 0,
                "commission": 0,
                "commands": "0",
                "client_id": 13,
                "waiter_id": 2,
                "created_at": "2021-03-28T03:30:57.000000Z",
                "updated_at": "2021-03-28T03:30:59.000000Z"
            }
        },
        {
            "id": 66,
            "quantity": 1,
            "product_id": 8,
            "order_id": 44,
            "created_at": "2021-03-28T03:30:59.000000Z",
            "updated_at": "2021-03-28T03:30:59.000000Z",
            "price": 8.9,
            "product": {
                "id": 8,
                "name": "Cerveja4",
                "price": 8.9,
                "created_at": "2021-03-27T14:31:47.000000Z",
                "updated_at": "2021-03-27T14:31:47.000000Z"
            },
            "order": {
                "id": 44,
                "total": 26.7,
                "discount": 0,
                "commission": 0,
                "commands": "0",
                "client_id": 13,
                "waiter_id": 2,
                "created_at": "2021-03-28T03:30:57.000000Z",
                "updated_at": "2021-03-28T03:30:59.000000Z"
            }
        },
        {
            "id": 67,
            "quantity": 22,
            "product_id": 5,
            "order_id": 45,
            "created_at": "2021-03-28T20:03:06.000000Z",
            "updated_at": "2021-03-28T20:03:06.000000Z",
            "price": 8.9,
            "product": {
                "id": 5,
                "name": "Cerveja0",
                "price": 8.9,
                "created_at": "2021-03-27T14:31:47.000000Z",
                "updated_at": "2021-03-27T14:31:47.000000Z"
            },
            "order": {
                "id": 45,
                "total": 195.8,
                "discount": 0,
                "commission": 0,
                "commands": "0",
                "client_id": 13,
                "waiter_id": 2,
                "created_at": "2021-03-28T20:03:06.000000Z",
                "updated_at": "2021-03-28T20:03:06.000000Z"
            }
        }
    ]
}
```
<div id="execution-results-GETapi-ordersproduct-all" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-ordersproduct-all"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-ordersproduct-all"></code></pre>
</div>
<div id="execution-error-GETapi-ordersproduct-all" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-ordersproduct-all"></code></pre>
</div>
<form id="form-GETapi-ordersproduct-all" data-method="GET" data-path="api/ordersproduct/all" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-ordersproduct-all', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-ordersproduct-all" onclick="tryItOut('GETapi-ordersproduct-all');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-ordersproduct-all" onclick="cancelTryOut('GETapi-ordersproduct-all');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-ordersproduct-all" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/ordersproduct/all</code></b>
</p>
</form>


## Cadastra nova comanda e produto.




> Example request:

```bash
curl -X POST \
    "http://localhost/api/ordersproduct/new" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/ordersproduct/new"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTapi-ordersproduct-new" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-ordersproduct-new"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-ordersproduct-new"></code></pre>
</div>
<div id="execution-error-POSTapi-ordersproduct-new" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-ordersproduct-new"></code></pre>
</div>
<form id="form-POSTapi-ordersproduct-new" data-method="POST" data-path="api/ordersproduct/new" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-ordersproduct-new', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-ordersproduct-new" onclick="tryItOut('POSTapi-ordersproduct-new');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-ordersproduct-new" onclick="cancelTryOut('POSTapi-ordersproduct-new');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-ordersproduct-new" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/ordersproduct/new</code></b>
</p>
</form>


## Retorna comanda produto por id passado




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/ordersproduct/show/asperiores" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/ordersproduct/show/asperiores"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json
{
    "data": {
        "product": null,
        "order": null
    }
}
```
<div id="execution-results-GETapi-ordersproduct-show--order-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-ordersproduct-show--order-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-ordersproduct-show--order-"></code></pre>
</div>
<div id="execution-error-GETapi-ordersproduct-show--order-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-ordersproduct-show--order-"></code></pre>
</div>
<form id="form-GETapi-ordersproduct-show--order-" data-method="GET" data-path="api/ordersproduct/show/{order}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-ordersproduct-show--order-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-ordersproduct-show--order-" onclick="tryItOut('GETapi-ordersproduct-show--order-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-ordersproduct-show--order-" onclick="cancelTryOut('GETapi-ordersproduct-show--order-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-ordersproduct-show--order-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/ordersproduct/show/{order}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>order</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="order" data-endpoint="GETapi-ordersproduct-show--order-" data-component="url" required  hidden>
<br>
</p>
</form>


## Atualiza comanda produto por id passado.




> Example request:

```bash
curl -X PUT \
    "http://localhost/api/ordersproduct/update/nam" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/ordersproduct/update/nam"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "PUT",
    headers,
}).then(response => response.json());
```


<div id="execution-results-PUTapi-ordersproduct-update--order-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-ordersproduct-update--order-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-ordersproduct-update--order-"></code></pre>
</div>
<div id="execution-error-PUTapi-ordersproduct-update--order-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-ordersproduct-update--order-"></code></pre>
</div>
<form id="form-PUTapi-ordersproduct-update--order-" data-method="PUT" data-path="api/ordersproduct/update/{order}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-ordersproduct-update--order-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-ordersproduct-update--order-" onclick="tryItOut('PUTapi-ordersproduct-update--order-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-ordersproduct-update--order-" onclick="cancelTryOut('PUTapi-ordersproduct-update--order-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-ordersproduct-update--order-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/ordersproduct/update/{order}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>order</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="order" data-endpoint="PUTapi-ordersproduct-update--order-" data-component="url" required  hidden>
<br>
</p>
</form>


## Deleta comanda produto por id passado.




> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/ordersproduct/delete/alias" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/ordersproduct/delete/alias"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


<div id="execution-results-DELETEapi-ordersproduct-delete--order-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-ordersproduct-delete--order-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-ordersproduct-delete--order-"></code></pre>
</div>
<div id="execution-error-DELETEapi-ordersproduct-delete--order-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-ordersproduct-delete--order-"></code></pre>
</div>
<form id="form-DELETEapi-ordersproduct-delete--order-" data-method="DELETE" data-path="api/ordersproduct/delete/{order}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-ordersproduct-delete--order-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-ordersproduct-delete--order-" onclick="tryItOut('DELETEapi-ordersproduct-delete--order-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-ordersproduct-delete--order-" onclick="cancelTryOut('DELETEapi-ordersproduct-delete--order-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-ordersproduct-delete--order-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/ordersproduct/delete/{order}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>order</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="order" data-endpoint="DELETEapi-ordersproduct-delete--order-" data-component="url" required  hidden>
<br>
</p>
</form>



