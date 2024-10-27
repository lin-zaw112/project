SELECT users.id, users.name, users.role_id, roles.name
AS role FROM users LEFT JOIN roles
ON users.role_id = roles.id