<template>
    <div class="container">

                <div class="form-group">
                    <input type="text" placeholder="Hello! What is your name?" id="name" v-model="my_name">
                </div>
                <div class="form-group">
                    <input type="text" placeholder="Where you from?" id="city" v-model="city">
                </div>
                <div class="form-group">
                    <input type="text" placeholder="Enter name of your pet,please" id="pet-name" v-model="pet_name">
                </div>
                <div class="form-group">
                    <input type="text" id="breed" placeholder="enter breed of your dog, please" v-model="breed">
                </div>

                <div class="form-group">
                    <select class="form-control" id="month" v-model="month">
                        <option value="1">January</option>
                        <option value="2">February</option>
                        <option value="3">March</option>
                        <option value="4">April</option>
                        <option value="5">May</option>
                        <option value="6">June</option>
                        <option value="7">Jule</option>
                        <option value="8">August</option>
                        <option value="9">September</option>
                        <option value="10">October</option>
                        <option value="11">November</option>
                        <option value="12">December</option>
                    </select>
                </div>
                <div class="form-group">
                    <input type="number" id="count" placeholder="how many times you stroke your dog on this month?" v-model="count">
                </div>
                <div class="form-group">
                    <button type="submit" id="send" @click="submit_form">Send data</button>
                </div>
    </div>
</template>

<script>
    export default{
        data(){
          return{
              fields:{},
              errors:{},
              my_name:'',
            city:'',
            pet_name:'',
            breed:'',
            month:'',
            count:'',
          }
        },
        methods:{
            submit_form() {
                this.errors = {};
                axios({
                    method: 'post',
                    url: '/send',
                    params: {
                        name: this.my_name,
                        city: this.city,
                        pet_name: this.pet_name,
                        breed: this.breed,
                        month: this.month,
                        count: this.count
                    },
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },

                })
                    .then((response) => {
                        alert('Your data is sending, thank!');
                        this.my_name='';
                        this.city='';
                        this.pet_name='';
                        this.breed='';
                        this.count='';
                        this.month=0;
                    })
            },


        },
    }

</script>
