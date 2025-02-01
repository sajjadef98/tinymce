# TinyMCE with Bootstrap and PHP Upload  

## English | فارسی  

---  

## 📄 About the Project | درباره پروژه  

This project integrates the **TinyMCE** rich text editor with **Bootstrap 5** and **PHP** to enable image uploads. Users can write and format text using TinyMCE's powerful features and upload images to the server with PHP.  

این پروژه ویرایشگر متن **TinyMCE** را با **Bootstrap 5** و **PHP** ادغام می‌کند تا امکان آپلود تصاویر را فراهم کند. کاربران می‌توانند با استفاده از قابلیت‌های قدرتمند TinyMCE متن خود را نوشته و قالب‌بندی کنند و تصاویر را به سرور آپلود نمایند.  

---  

## 🚀 Features | ویژگی‌ها  

- **TinyMCE  Integration:** A powerful WYSIWYG editor.  
- **Bootstrap 5 Styling:** Responsive and modern design.  
- **PHP Backend:** Handles image uploads securely.  
- **RTL Support:** Fully compatible with Persian (Farsi) language.  
- **Custom Toolbar:** Includes text formatting, media uploads, and code preview.  
- **Auto Image Upload:** Instantly uploads images to the server.  
- **Responsive Layout:** Works on all screen sizes.  

- **ادغام با TinyMCE :** یک ویرایشگر قدرتمند WYSIWYG.  
- **استایل‌دهی با Bootstrap 5:** طراحی مدرن و واکنش‌گرا.  
- **بک‌اند PHP:** مدیریت آپلود تصاویر به صورت امن.  
- **پشتیبانی از راست‌چین:** کاملاً سازگار با زبان فارسی.  
- **نوار ابزار سفارشی:** شامل قالب‌بندی متن، آپلود رسانه و پیش‌نمایش کد.  
- **آپلود خودکار تصاویر:** تصاویر به صورت آنی در سرور ذخیره می‌شوند.  
- **طراحی واکنش‌گرا:** سازگار با تمامی دستگاه‌ها.  

---  

## 🛠 Installation | نصب و راه‌اندازی  

1. **Clone the repository:**  
   ```bash  
   git clone https://github.com/sajjadef98/tinymce-php-upload.git  
   ```  

2. **Navigate to the project directory:**  
   ```bash  
   cd tinymce-php-upload  
   ```  

3. **Run the project in a local server (e.g., XAMPP, WAMP, MAMP):**  
   - Place the project in the `htdocs` folder (for XAMPP users).  
   - Start Apache and MySQL services.  

4. **Open the project in your browser:**  
   ```  
   http://localhost/tinymce-php-upload/tinymc.php  
   ```  

---  

## 📂 File Structure | ساختار فایل‌ها  

```
tinymce-php-upload/  
│-- tinymc.php            # Main TinyMCE integration file  
│-- upload.php            # PHP script for image uploads  
│-- submit.php            # Handles form submission  
│-- tinymce/              # TinyMCE editor files  
│-- assets/               # Additional resources (CSS, JS, etc.)  
│-- README.md             # Project documentation  
```  

---  

## ⚙ Configuration | پیکربندی  

You can configure TinyMCE settings inside the `tinymc.php` file:  

```js  
tinymce.init({  
    selector: '#editor',  
    language: "fa",  
    plugins: 'advlist autolink lists link image charmap print preview anchor searchreplace visualblocks code fullscreen insertdatetime media table paste code help wordcount',  
    toolbar: 'undo redo | formatselect | bold italic underline backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | code preview',  
    height: 600,  
    branding: false,  
    images_upload_url: 'upload.php',  
    automatic_uploads: true  
});  
```  

To change the upload directory, modify `upload.php`:  

```php  
$target_dir = "uploads/";  
```  

---  

## 🖼 Image Upload | آپلود تصاویر  

The image upload functionality works automatically when a user inserts an image via the TinyMCE editor. The image is sent to `upload.php` via AJAX and stored in the `uploads/` folder.  

قابلیت آپلود تصویر به صورت خودکار عمل می‌کند. هنگامی که کاربر تصویری را در ویرایشگر TinyMCE وارد می‌کند، تصویر از طریق AJAX به `upload.php` ارسال شده و در پوشه `uploads/` ذخیره می‌شود.  

---  

## 🧪 Usage | نحوه استفاده  

1. Open the project in your browser.  
2. Write your content in the TinyMCE editor.  
3. Upload images by clicking the image button.  
4. Click the submit button to save the content.  

1. پروژه را در مرورگر باز کنید.  
2. محتوای خود را در ویرایشگر بنویسید.  
3. با کلیک روی دکمه تصویر، تصاویر را آپلود کنید.  
4. روی دکمه "تأیید" کلیک کنید تا محتوا ذخیره شود.  

---  

## ❓ Troubleshooting | رفع مشکلات  

- Ensure your server supports PHP.  
- Check file permissions for the `uploads/` folder.  
- Use the browser developer console for debugging errors.  

- اطمینان حاصل کنید که سرور شما از PHP پشتیبانی می‌کند.  
- دسترسی‌های لازم را برای پوشه `uploads/` تنظیم کنید.  
- از کنسول مرورگر برای بررسی خطاها استفاده کنید.  

---  

## 📜 License | مجوز  

This project is licensed under the MIT License. Feel free to use and modify it.  

این پروژه تحت مجوز MIT ارائه شده است. با خیال راحت از آن استفاده و آن را تغییر دهید.  

---  

## 💬 Contact | تماس با ما  

If you have any questions or suggestions, feel free to contact me:  

- instagram: [phpdevelop.er](https://www.instagram.com/phpdevelop.er/)  
- GitHub: [sajjadef98](https://github.com/sajjadef98) 
در صورت داشتن هرگونه سوال یا پیشنهاد، می‌توانید با من تماس بگیرید:  

- اینستاگرام : [phpdevelop.er](https://www.instagram.com/phpdevelop.er/) 
- گیت‌هاب: [sajjadef98](https://github.com/sajjadef98)  

---  

**Enjoy coding! | از برنامه‌نویسی لذت ببرید!** 🚀
