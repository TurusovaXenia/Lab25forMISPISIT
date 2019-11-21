<template>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <line-chart :chart-data="data" :height="150" :options="{
                    responsive: true,
                    maintainAspectRation: true
                }">

                </line-chart>

            </div>
        </div>
    </div>
</template>

<script>
    import LineChart from './LineChart';
    export default {
        components:{
            LineChart
        },
        data: function(){
            return{
                data:[]
            }
        },
        mounted() {
            axios({
                method:'get',
                url:'/charts/test',
                params:{
                    month:9
                }
            })
            this.update();
        },
        methods:{
            update:function () {
                axios({
                    method:'get',
                    url:'/charts/data',
                })
                    .then((response)=>{
                        this.data = response.data;
                    })
            }
        }
        // mounted() {
        //     this.update()
        // },
        // methods: {
        //     update: function () {
        //         axios.get('/').then((response) =>{
        //             console.log(response);
        //             this.data = response.data
        //         })
        //     }
        // }
    }
</script>
