<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

    <title>Online Quiz</title>

    <!-- Required Stylesheets -->
    <link
      type="text/css"
      rel="stylesheet"
      href="https://unpkg.com/bootstrap/dist/css/bootstrap.min.css"
    />
    <link
      type="text/css"
      rel="stylesheet"
      href="https://unpkg.com/bootstrap-vue@latest/dist/bootstrap-vue.css"
    />

    <!-- Load polyfills to support older browsers -->
    <script src="https://polyfill.io/v3/polyfill.min.js?features=es2015%2CIntersectionObserver"></script>

    <!-- Required scripts -->
    <script src="https://unpkg.com/vue@latest/dist/vue.js"></script>
    <script src="https://unpkg.com/bootstrap-vue@latest/dist/bootstrap-vue.js"></script>
  </head>
  <body>
    <!-- Our application root element -->
    <div id="app">
      <b-container>
      	<div>
  <b-navbar toggleable="lg" type="dark" variant="info">
    <b-navbar-brand href="#">Home</b-navbar-brand>

    <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>

    <b-collapse id="nav-collapse" is-nav>
      <b-navbar-nav>
        <b-nav-item href="#">About US</b-nav-item>
        <b-nav-item href="#" disabled>Contact US </b-nav-item>
      </b-navbar-nav>

      <!-- Right aligned nav items -->
      <b-navbar-nav class="ml-auto">
        <b-nav-form>
          <b-form-input size="sm" class="mr-sm-2" placeholder="Search"></b-form-input>
          <b-button size="sm" class="my-2 my-sm-0" type="submit">Search</b-button>
        </b-nav-form>

        <b-nav-item-dropdown text="Lang" right>
          <b-dropdown-item href="#">EN</b-dropdown-item>
          <b-dropdown-item href="#">ES</b-dropdown-item>
          <b-dropdown-item href="#">RU</b-dropdown-item>
          <b-dropdown-item href="#">FA</b-dropdown-item>
        </b-nav-item-dropdown>

        <b-nav-item-dropdown right>
          <!-- Using 'button-content' slot -->
          <template v-slot:button-content>
            <em>User</em>
          </template>
          <b-dropdown-item href="#">Profile</b-dropdown-item>
          <b-dropdown-item href="#">Sign Out</b-dropdown-item>
        </b-nav-item-dropdown>
      </b-navbar-nav>
    </b-collapse>
  </b-navbar>
</div>
        <b-jumbotron header="Online Quiz" lead="Just Focus on Exam Rest will take care of us">
          <p>For more information visit our website</p>
          <b-btn variant="primary" href="https://bootstrap-vue.js.org/">More Info</b-btn>
        </b-jumbotron>
		<div>
			<h3> Our Team </h3>
		  <b-card-group deck>
		    <b-card
		      header="Full Stack Developer"
		      header-tag="header"
		      title="Venkatesh"
		    >
		     <b-img right thumbnail rounded="circle" width = 100 height = 100 src="venkatesh.jpg" alt="Right image"></b-img>
		      <b-card-text>MySQL Developer</b-card-text>
		      <b-button href="#" variant="primary">More Info</b-button>
		    </b-card>
		    <b-card
		      header="Front End Developer"
		      header-tag="header"
		      title="Saketh"
		    >
		    <b-img right thumbnail rounded="circle" width = 100 height = 100 src="saketh.jpg" alt="Right image"></b-img>
		      <b-card-text>Vue.JS Developer</b-card-text>
		      <b-button href="#" variant="primary">More Info</b-button>
		    </b-card>

		    <b-card
		      header="Backend Developer"
		      header-tag="header"
		      title="Kaushik"
		    >
		    <b-img right thumbnail rounded="circle" width = 100 height = 100 src="kaushik.jpg" alt="Right image"></b-img>
		      <b-card-text>PHP Developer</b-card-text>
		      <b-button href="#" variant="primary">More Info</b-button>
		    </b-card>
		  </b-card-group>
		</div>
      </b-container>
    </div>

    <!-- Start running your app -->
    <script>
      window.app = new Vue({
        el: '#app',
        data: {
          name: ''
        },
        computed: {
          showAlert() {
            return this.name.length > 4 ? true : false
          }
        }
      })
    </script>
  </body>
</html>
