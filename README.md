# Pelita Cahaya Abadi

Pelita Cahaya Abadi is a school website that provides an online registration platform for prospective students. Through this system, users can easily register themselves or others to Pelita Cahaya Abadi School without the need for a face-to-face interview.

This platform is designed to help applicants who may not have the opportunity to come directly to the school, ensuring a more accessible and efficient registration process.

---

## Installation

1. Clone the repository:
    ```bash
    git clone https://github.com/kneissa/proyek-sts-pwl.git
    ```

2. Navigate into the project folder:
    ```bash
    cd proyek-sts-pwl
    ```

3. Run a local PHP server:
   **Option 1: Using PHP built-in server**
   ```bash
   php -S localhost:8000
   ```

4. Set up the database:
  - Open your database tool (phpMyAdmin, MySQL Workbench, or command line).
  - Create a new database "ta_pwl".
  - Import the SQL file provided in the repository (ta_pwl.sql):
    ```bash
    mysql -u root -p proyek_sts < ta_pwl.sql
    ```
    Or use phpMyAdmin → Import → Choose file ta_pwl.sql.

---

## Usage

1. Open your browser and go to http://localhost:8000 (if using built-in PHP server) or http://localhost/proyek-sts-pwl (if using XAMPP/Laragon)

2. On the homepage, users can click Register button(Daftar) to create a new account.
   
3. Complete the registration form by providing the required data in each field.

4. Login to access features:

   - **Admin login**:  
     Username: `admin`  
     Password: `111`

   - **User login**:  
     Create an account first via the registration page.

5. After login, users can access their dashboard or profile page depending on their role.

   Main features:
   
**Admin**
      - view registrant data
      - add new registrant

**Registrant**
      - create account
      - view about the school information

---

## Architecture

```Project structure
sts-pwl/
  ├── index.php                   ~ Main page
  ├── admin.php                   ~ Admin page
  ├── pendaftaran.php             ~ Register page
  ├── login.php                   ~ Login page
  ├── register.php                ~ Account register page
  ├── n1.html                     ~ News page 1
  ├── n2.html                     ~ News page 2
  ├── n3.html                     ~ News page 3
  ├── n4.html                     ~ News page 4
  ├── n5.html                     ~ News page 5
  ├── profile.php                 ~ User profile page
  ├── profile2.php                ~ admin view profile page
  ├── about fondasi.html          ~ Fondation page
  ├── about sejarah.html          ~ History page
  ├── about motto.html            ~ Motto page
  ├── pendaftaranberhasil.html    ~ Page after register success
  ├── /foto                       ~ Image folder 
      ├── ###.png                   ~ Supporting icons/images
      ├── ###.jpg                   ~ Supporting icons/images
  ├── /css                        ~ Styling folder 
      ├── index.css                 ~ Main page styling
      ├── pendaftaran.css           ~ Register page styling
      ├── style.css                 ~ Login, account register page styling
      ├── news.css                  ~ News page styling
      ├── About Us.css              ~ About page styling
      ├── pendaftaranberhasil.css   ~ Styling of page after register success 
      ├── admin.css                 ~ Admin page styling 
  ├── ta_pwl.sql                  ~ database
  └── README.md                   ~ Project documentation
```

---

## Contributing

We welcome contributions from anyone who wants to help improve Pelita Cahaya Abadi School Registration Website!
Whether you are fixing bugs, adding new features, enhancing the design, or improving documentation, your contributions are highly appreciated.

### How to Contribute

1. Fork this repository.
2. Create a new branch for your feature or bugfix.
3. Commit your changes with a clear and descriptive message.
4. Push your branch and open a Pull Request.
5. Wait for review and feedback before merging.

### Contribution Guidelines
- Keep your code clean, structured, and well-documented.
- Ensure that any new features or fixes are properly tested.
- Maintain consistency with the existing project structure.
- Be respectful, collaborative, and constructive in discussions.

> Together, we can make Pelita Cahaya Abadi a more accessible and user-friendly platform for school registration! 

---

## License
This project is licensed under the MIT License.
You are free to use, modify, and redistribute it as long as proper credit is given.

---

## Team Members
1. Gervasio Velasques
2. Kaneisha Eliorra
3. Michael Leonardo
