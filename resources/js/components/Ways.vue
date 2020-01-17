<template>
  <div class="waysDiv">
    <table class="table table-striped table-hover ">
        <thead>
             <th>Дата</th>
             <th>Маршрут</th>
             <th>Вантаж</th>
             <th>Вага</th>
        </thead>
        <tbody>
            <tr v-for="(way, id) in ways" v-bind:key="id">
                <td>{{ way.created_at }}</td>
                <td>{{ way.name }}</td>
                <td>{{ way.product }}</td>
                <td>{{ way.weight }} т</td>
            </tr>
        </tbody>
    </table>
</div>
</template>
<script>
import axios from 'axios';
  export default {
    props: ['ways'],
    data() {
    return {
      //ways: null,
      interval: null,
    };
  },
  created() {
    //this.GetWays();
  },
  update(){
    //this.GetWays();
  },
  mounted () {
    //this.startTimer()
  },
  beforeDestroy () {
    //this.stopTimer()
  },
  methods: {
    RealTimeWays(){
      
    },
    /*
     stopTimer () {
      if (this.interval) {
        window.clearInterval(this.interval)
      }
    },
    startTimer () {
      this.stopTimer()
      this.interval = window.setInterval(() => {
        this.GetWays()
      }, 1000)
    }*/
  }
}
</script>