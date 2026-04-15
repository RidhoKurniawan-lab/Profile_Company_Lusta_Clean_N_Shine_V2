LustaV2
├─ .htaccess
├─ app
│  ├─ Config
│  │  └─ Database.php
│  ├─ Controllers
│  │  ├─ api
│  │  │  ├─ AdminApiController.php
│  │  │  ├─ AuthApiController.php
│  │  │  └─ ProductController.php
│  │  └─ web
│  │     ├─ AdminController.php
│  │     ├─ AuthController.php
│  │     └─ UserController.php
│  ├─ Core
│  │  ├─ Auth.php
│  │  ├─ Controller.php
│  │  ├─ Model.php
│  │  └─ Router.php
│  └─ Models
│     ├─ CategoryModel.php
│     ├─ ProductLinkModel.php
│     ├─ ProductModel.php
│     └─ UserModel.php
├─ Config.php
├─ package-lock.json
├─ package.json
├─ public
│  ├─ assets
│  │  ├─ css
│  │  │  ├─ input.css
│  │  │  └─ output.css
│  │  ├─ img
│  │  │  ├─ logo.png
│  │  │  ├─ logo_text.png
│  │  │  ├─ lustas.png
│  │  │  ├─ product_1.png
│  │  │  ├─ product_bg_1.PNG
│  │  │  └─ product_bg_2.png
│  │  ├─ js
│  │  │  ├─ admin
│  │  │  │  ├─ event.js
│  │  │  │  ├─ render.js
│  │  │  │  └─ ui.js
│  │  │  ├─ api.js
│  │  │  ├─ auth
│  │  │  │  ├─ event.js
│  │  │  │  └─ ui.js
│  │  │  ├─ dom.js
│  │  │  ├─ errorValidationHendler.js
│  │  │  ├─ helper.js
│  │  │  ├─ sweetAlert.js
│  │  │  └─ user
│  │  │     ├─ event.js
│  │  │     └─ ui.js
│  │  └─ uploads
│  │     └─ products
│  │        ├─ Product_697ed417777ca.jpg
│  │        └─ Product_69803680aefe9.png
│  └─ index.php
├─ routes
│  ├─ api.php
│  └─ web.php
└─ views
   ├─ admin
   │  ├─ index.php
   │  └─ product
   │     ├─ add_product.php
   │     ├─ edit_product.php
   │     ├─ link_product.php
   │     └─ product.php
   ├─ auth
   │  └─ index.php
   ├─ layout
   │  ├─ admin.php
   │  ├─ auth.php
   │  └─ user.php
   ├─ partials
   │  ├─ admin
   │  │  ├─ footer.php
   │  │  └─ header.php
   │  ├─ auth
   │  │  ├─ footer.php
   │  │  └─ header.php
   │  └─ user
   │     ├─ footer.php
   │     └─ header.php
   └─ user
      ├─ about.php
      ├─ contact.php
      ├─ index.php
      └─ product.php
