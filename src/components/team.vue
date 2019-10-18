<template>
  <div>
    <h3> Our Team </h3>
      <b-card-group deck>
        <b-card
          header="Full Stack Developer"
          header-tag="header"
          title="Venkatesh"
        >

         <b-img right thumbnail rounded="circle" width = 100 height = 100 src="../static/venkatesh.jpg" alt="Right image"></b-img>
          <b-card-text>MySQL Developer</b-card-text>
          <b-button variant="primary">More Info</b-button>
        </b-card>
        <b-card
          header="Front End Developer"
          header-tag="header"
          title="Saketh"
        >
        <b-img right thumbnail rounded="circle" width = 100 height = 100 src="../static/saketh.jpg" alt="Right image"></b-img>
          <b-card-text>Vue.JS Developer</b-card-text>
          <b-button variant="primary">More Info</b-button>
        </b-card>

        <b-card
          header="Backend Developer"
          header-tag="header"
          title="Kaushik"
        >
        <b-img right thumbnail rounded="circle" width = 100 height = 100 src="../static/kaushik.jpg" alt="Right image"></b-img>
          <b-card-text>PHP Developer</b-card-text>
          <b-button variant="primary">More Info</b-button>
        </b-card>
      </b-card-group>
    </div>
  </template>
  
<script>
export default {
  name: 'team',
  data () {
    return {
      msg: 'Welcome to Your Vue.js App'
    }
  }
}
</script>
