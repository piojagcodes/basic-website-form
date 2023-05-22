-- Create the "users" table
CREATE TABLE users (
  id INT PRIMARY KEY,
  user VARCHAR(50),
  password VARCHAR(50),
  email VARCHAR(100),
  wood INT,
  stone INT,
  crop INT,
  days_premium INT
);

-- Insert random data into the "users" table
INSERT INTO users (id, user, password, email, wood, stone, crop, days_premium) VALUES
(1, 'JohnDoe', 'password1', 'johndoe@example.com', 100, 50, 200, 30),
(2, 'JaneSmith', 'password2', 'janesmith@example.com', 75, 100, 150, 15),
(3, 'AliceJohnson', 'password3', 'alicejohnson@example.com', 200, 200, 100, 60),
(4, 'BobWilliams', 'password4', 'bobwilliams@example.com', 50, 75, 250, 45),
(5, 'EmilyBrown', 'password5', 'emilybrown@example.com', 150, 150, 50, 90);