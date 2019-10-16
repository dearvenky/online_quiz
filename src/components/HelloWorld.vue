<template>
  <b-container>
    <div>
      <navbar></navbar>
    </div>
    <b-jumbotron header="Online Quiz" lead="Just Focus on Exam Rest will take care of us">
      <p>For more information visit our website</p>
      <b-btn variant="primary">More Info</b-btn>
    </b-jumbotron>
    <div>
      <team></team>
    </div>
  </b-container>
</template>

<script>
import navbar from '@/components/navbar'
import team from '@/components/team'
export default {
  name: 'HelloWorld',
  data () {
    return {
      msg: 'Welcome to Your Vue.js App'
    }
  },
  components: {
    'navbar': navbar,
    'team': team
  }
}
</script>
