
### API Authentication and Usage Documentation

---

## Authentication

To use the API, users must be authenticated. Authentication is handled via Bearer Tokens.

### Endpoints

1. **Register a User**  
   **Method**: `POST /api/register`  
   **Request Body**:
   ```json
   {
     "first_name": "John",
     "last_name": "Doe",
     "date_of_birth": "1990-01-01",
     "gender": "male",
     "email": "john@example.com",
     "password": "password",
     "password_confirmation": "password"
   }
   ```

2. **Login**  
   **Method**: `POST /api/login`  
   **Request Body**:
   ```json
   {
     "email": "john@example.com",
     "password": "password"
   }
   ```
   **Response**: On successful login, you will receive a token that you will use to authenticate other requests.

3. **Logout**  
   **Method**: `POST /api/logout`  
   **Authorization**: Bearer Token

---

## API Endpoints

### Users

- **Get All Users**  
  **Method**: `GET /api/users`  
  **Authorization Header**:
  ```plaintext
  Authorization: Bearer {your_token}
  ```

- **Get a Single User**  
  **Method**: `GET /api/users/{id}`  
  **Authorization Header**:
  ```plaintext
  Authorization: Bearer {your_token}
  ```

- **Update a User**  
  **Method**: `PATCH /api/users/{id}`  
  **Request Body (optional fields)**:
  ```json
  {
    "first_name": "Jane",
    "last_name": "Doe"
  }
  ```

- **Delete a User**  
  **Method**: `DELETE /api/users/{id}`  
  **Authorization Header**: Bearer Token

### Projects

- **Create a Project**  
  **Method**: `POST /api/projects`  
  **Request Body**:
  ```json
  {
    "name": "Project A",
    "department": "Development",
    "start_date": "2024-01-01",
    "end_date": "2024-12-31",
    "status": "ongoing"
  }
  ```

- **Get All Projects**  
  **Method**: `GET /api/projects`

- **Get a Single Project**  
  **Method**: `GET /api/projects/{id}`

- **Update a Project**  
  **Method**: `PATCH /api/projects/{id}`

- **Delete a Project**  
  **Method**: `DELETE /api/projects/{id}`

### Timesheets

- **Create a Timesheet**  
  **Method**: `POST /api/timesheets`  
  **Request Body**:
  ```json
  {
    "task_name": "Design Work",
    "date": "2024-10-06",
    "hours": 5,
    "user_id": 1,
    "project_id": 1
  }
  ```

- **Get All Timesheets**  
  **Method**: `GET /api/timesheets`

- **Get a Single Timesheet**  
  **Method**: `GET /api/timesheets/{id}`

- **Update a Timesheet**  
  **Method**: `PATCH /api/timesheets/{id}`

- **Delete a Timesheet**  
  **Method**: `DELETE /api/timesheets/{id}`

---

## Testing with Postman

1. **Register a new user** using the `/api/register` endpoint.
2. **Login** with the same credentials to receive a **Bearer Token**.
3. Use the Bearer Token for authorization when accessing other API routes.

### Bearer Token Authentication

Once you have received a token from the login endpoint, include it in your Postman requests like this:

- In the **Headers** section of your Postman request, add:
  ```plaintext
  Authorization: Bearer {your_token}
  ```

---

## Example Credentials

Here are some example credentials you can use for testing purposes:

- **Username**: `admin@example.com`
- **Password**: `password`

### Sample Users for Testing

- **Email**: `user1@example.com`  
  **Password**: `password`

- **Email**: `user2@example.com`  
  **Password**: `password`

---

## Troubleshooting

- Ensure you are running MySQL and have configured the correct database connection details in the `.env` file.
- If the API is returning **404** or **401** errors:
  - Check that you have included the Bearer token correctly in your requests.
  - Make sure the routes are correctly defined and accessible.
  - Ensure the user exists in the database, especially when trying to retrieve user details.
- For issues related to the database, verify that migrations have run successfully and the database is set up correctly.

---
