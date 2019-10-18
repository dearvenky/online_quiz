<template>
<div>
  <b-navbar toggleable="lg" type="dark" variant="info">
    <b-navbar-brand href="#">Home</b-navbar-brand>

    <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>

    <b-collapse id="nav-collapse" is-nav>
      <b-navbar-nav>
        <b-nav-item href="#">About us</b-nav-item>
      </b-navbar-nav>

      <!-- Right aligned nav items -->
      <b-navbar-nav class="ml-auto">
          <b-nav-item v-b-modal="'login-modal'">Login/Register</b-nav-item>
          <b-modal id="login-modal">
            <b-tabs content-class="mt-3" align="center">
              <b-tab title="Login">  
                <b-form>  
                  <b-form-input id="login-email"  type="email" required placeholder="Email"></b-form-input><br>
                  <b-form-input id="login-pass"  type="password" required placeholder="Password"></b-form-input>
                </b-form>
              </b-tab>

              <b-tab title="Register">
                <b-form>
                  <b-form-input id="reg-fname"  type="text" required placeholder="First name"></b-form-input><br>
                  <b-form-input id="reg-lname"  type="text" required placeholder="Last name"></b-form-input><br>  
                  <b-form-input id="reg-email"  type="email" required placeholder="Email"></b-form-input><br>
                  <b-form-input id="reg-pass"  type="password" required placeholder="Password"></b-form-input><br>
                  <b-form-input id="reg-repass"  type="password" required placeholder="Confirm Password"></b-form-input><br>
                </b-form>
              </b-tab>

            </b-tabs>

            <template v-slot:modal-footer="{ Submit }">
              <b-button size="sm" @click="submit()">Submit</b-button>
            </template>

          </b-modal>
          

          
      </b-navbar-nav>
    </b-collapse>
  </b-navbar>
</div>
</template>

<script>
export default {
  name: 'navbar'
}
</script>
