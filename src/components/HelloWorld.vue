<template>
  <b-container>
    <navbar></navbar>
    <b-jumbotron header="Online Quiz" lead="Host. Participate. Compete.">
      <p>For more information visit our website</p>
      
      <div>
        <b-btn variant="primary" v-on:click="open('create')">Create Quiz</b-btn>

        <b-btn variant="primary" v-b-modal="'quiz-id'">Take Quiz</b-btn>
        <b-modal id="quiz-id">
          <b-input placeholder="Enter quiz ID : "></b-input>
          <template v-slot:modal-footer="{ Submit }">
            <b-button size="sm" v-on:click="open('take')">Submit</b-button>
          </template>   
        </b-modal>
      </div>

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
  methods:{
    open: function(text){
      this.$router.push({path : text})
    }
  },
  components: {
    'navbar': navbar,
    'team': team
  }
}
</script>
