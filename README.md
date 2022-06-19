# Clonegur 📸
An imgur clone, I made this while learning how to upload files in php. There are some very basic security checks but I can't be sure it's not vulnerable. 

![Screenshot from the app](https://pbs.twimg.com/media/FVj5RjZXwAAGDm0?format=jpg&name=large)

# Deployment
I worked on this with XAMPP, and it is what I reccomend you use. Simply install XAMPP for your OS from [here](https://www.apachefriends.org/download.html).

Then clone this repo to a folder inside the `htdocs` folder. The path of this folder varies from os.

After you've done that, if you want functioning recaptcha verification, create a key from the [ReCaptcha Admin Panel](https://www.google.com/recaptcha/admin/). Then substitute the values in the `.env` file.

### Remove ReCaptcha

If you don't require recaptcha, simply remove the div with the class `g-recaptcha` from the `index.php` file, aswell as removing this part from `upload.php`:

![Part of code to remove](https://i.imgur.com/HOn207d.png)

# Contact
As I said, this was simply a project meant to practice my PHP, but feel free to open a github issue, and I'll try my best to respond ASAP. Pull requests that help with security/bug fixes/general improvement are much appreciated!