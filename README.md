## 📅 Date
**2025-08-02**

---
# Laravel Eloquent Relationships API Practice

This project demonstrates the implementation and testing of **Laravel Eloquent relationships** using **API routes** and **Postman**.

---


## ✅ Relationships Implemented and Tested

### 1. One to One  
**Models:** `User` & `Profile`
- A user has one profile.
- Endpoints:
  - `POST /api/users/{id}/profile` → Create profile
  - `GET /api/users/{id}/profile` → Get user with profile

---

### 2. One to Many  
**Models:** `User` & `Post`
- A user can have many posts.
- Endpoints:
  - `POST /api/users/{id}/posts` → Create a post for a user
  - `GET /api/users/{id}/posts` → Get all posts of a user

---

### 3. Many to Many  
**Models:** `User` & `Role`
- A user can have many roles.
- A role can belong to many users.
- Pivot table: `role_user`
- Endpoints:
  - `POST /api/users/{id}/roles` → Assign multiple roles to a user
  - `GET /api/users/{id}/roles` → Get all roles of a user

---

### 4. Has Many Through  
**Example:** `Country → Users → Posts`  
- A country has many posts through users.
- Setup planned/tested as:
  - `Country` has many `Posts` through `Users`
- Endpoint (planned):
  - `GET /api/countries/{id}/posts` → Get all posts of users from a country

---

### 5. One to One Polymorphic  
**Example:** `User` & `Post` can both have one `Image`
- One image belongs to either a user or a post.
- Endpoint (planned):
  - `POST /api/image/{type}/{id}` → Add image to user or post
  - `GET /api/image/{type}/{id}` → Get image for user or post

---

### 6. One to Many Polymorphic  
**Example:** `User` & `Post` can have many `Comments`
- Comments can belong to multiple models (users, posts).
- Endpoint (planned):
  - `POST /api/{type}/{id}/comments` → Add comment to user/post
  - `GET /api/{type}/{id}/comments` → Get comments for user/post

---

### 7. Many to Many Polymorphic  
**Example:** `Post`, `Video` can both have multiple `Tags`
- Tags can be reused across models.
- Endpoint (planned):
  - `POST /api/{type}/{id}/tags` → Assign tags to a model
  - `GET /api/{type}/{id}/tags` → Get all tags for a model

---

## 🧪 Testing

All endpoints tested via **Postman** with **raw JSON input**. Each relationship has been validated using database results and response structures.
