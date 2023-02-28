<h1>Car Reselling Website</h1>
  <p>A web application for reselling cars built using Laravel.</p>
  
  <h2>Features</h2>
  <ul>
    <li>User registration and login</li>
    <li>Car listing and management</li>
    <li>Car details and multiple image upload</li>
    <li>View sold cars</li>
    <li>Bootstrap 4 layout</li>
  </ul>
  
  <h2>Installation</h2>
  <ol>
    <li>Clone the repository:</li>
  </ol>
  <pre>git clone https://github.com/EshanAnsari/car-website.git</pre>
  
  <ol start="2">
    <li>Install the dependencies:</li>
  </ol>
  <pre><li>composer install</li><li>npm install</li></pre>
  
  <ol start="3">
    <li>
      Copy the <code>.env.example</code> file to <code>.env</code> and update
      the database connection details:
    </li>
  </ol>
  <pre>
   cp .env.example .env
  </pre>
  
  <ol start="4">
    <li>
      Generate a new <code>APP_KEY</code>:
    </li>
  </ol>
  <pre>php artisan key:generate</pre>
  
  <ol start="5">
    <li>Migrate the database:</li>
  </ol>
  <pre>php artisan migrate</pre>
  
  
  <ol start="5">
    <li>create the symbolic link:</li>
  </ol>
  <pre>php artisan storage:link</pre>
  
  
  <ol start="7">
    <li>Run the application:</li>
  </ol>
  <pre>php artisan serve</pre>
  
  <p>
    The application should now be available at 
    <code>http://localhost:8000</code>.
  </p>
  
  <h2>Usage</h2>
  <h3>User Authentication</h3>
  <p>
    The application includes basic user authentication functionality. Users can
    register for a new account or login with an existing account.
  </p>
  <h3>Car Listing</h3>
  <p>
    Users can list cars for reselling by filling out a form with car details
    such as car name, car type, price, top speed, and multiple images. The
    application saves car images in the <code>storage/app/public</code>
    directory.
  </p>
