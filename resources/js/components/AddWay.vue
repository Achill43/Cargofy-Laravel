<template>
  <div>
    <button type="button" class="btn btn-primary" @click="openForm()">Додати</button>
      <div v-if="showForm">
            <form>
                <div class="form-group">
                    <label>Маршрут</label>
                    <input type="text" class="form-control" v-model="newWay.name" required>
                </div>
                <div class="form-group">
                    <label>Вантаж</label>
                    <input type="text" class="form-control" v-model="newWay.product" required>
                </div>
                <div class="form-group">
                    <label>Вага</label>
                    <input type="number" class="form-control" v-model="newWay.weight" required>
                </div>
                <button type="button" class="btn btn-primary" @click="addNewWay()">Створити</button>
            </form>
      </div>
</div>
</template>
<script>
import axios from 'axios';
export default{
    props: ['ways'],
    data(){
        return{
            showForm: false,
            newWay: {
                name: null,
                product: null,
                weight: 0
            },
        }
    },
    methods:{
        openForm(){
            this.showForm=!this.showForm
        },
        addNewWay(){
            //event.preventDefault();
            if(this.newWay.name!=null && this.newWay.product!=null && this.newWay.weight!=0){
                console.log('Create new Way')

                axios.post('/addWay',{
                    name: this.newWay.name,
                    product: this.newWay.product,
                    weight: this.newWay.weight
                }).then(response => {
                    this.showForm=!this.showForm
                    var d= new Date,
                    newDate = [d.getFullYear(),
                        d.getMonth()+1,
                        d.getDate()].join('-')+' '+
                        [d.getHours(),
                        d.getMinutes(),
                        d.getSeconds()].join(':');
                    var createWay={
                        name: this.newWay.name,
                        product: this.newWay.product,
                        weight: this.newWay.weight,
                        created_at: newDate
                    }
                    //ways.unshift(createWay)
                    console.log('Start Event')
                    this.$emit('newway', createWay)
                })
                .catch(error => {
                    console.log('Server error: '+error)
                })
            }
            else{
                window.alert("Потрібно заповнити всі поля")
            }
        }
    }
}
</script>