<br />
<img src="<?php echo  plugins_url( DURIN_DIR_NAME . '/assets/logo.svg'); ?>" alt="Project Durin Logo">

<h1>This Wordpress instance is powered by Stackspin</h1>

<p>Welcome to your Wordpress website. It is almost identical to a regular Wordpress instance -- you can install plugins, change settings, add and customize themes, etc.</p>

<p>It also has some Stackspin-specific features:</p>

<h3>Automatic updates of Wordpress and core plugins</h3>
<p>Stackspin takes care of keeping Wordpress and the core plugins up-to-date and secure. This means you won't see the "Update" section on the dashboard that you might expect. Also, two core plugins cannot be removed/deactivated because they are required in order to integrate with the Stackspin dashboard.</p>

<h3>All users are managed through Stackspin</h3>
<p>Since you add and manage users on the Stackspin dashboard for all your Stackspin apps, the "Users" page in Wordpress has some limitations. Namely, you cannot delete users, and you cannot change certain parts of the user profile because those are defined in Stackspin.</p>

<h3>Some user roles are managed through Stackspin</h3>
<p>When giving users access to Wordpress on the Stackspin dashboard, their role will automatically be "Author" if they are regular users, and "Admin" if they are Stackspin administrators.</p>

<p>You can choose to change Authors to any other role within Wordpress, except Admin -- this role is reserved for users who are also Administrators on Stackspin.</p>

<h3>An important note on security</h3>

<p>Stackspin automatically updates itself and all the apps it includes. This lets Stackspin guarantee safety and security of its apps. Wordpress lets you install custom plugins and themes: please keep in mind that Stackspin cannot control or vouch for the safety and security of Wordpress once other plugins and themes are installed.</p>

<p>While we can keep the core Wordpress codebase up to date, third party plugins might be less secure and updated less frequently, and this might cause security issues.</p>

<p>If you are particularly concerned about safety and security of your Stackspin-powered website, please take care when installing plugins of themes and, if at all possible, avoid installing them. </p><?php
