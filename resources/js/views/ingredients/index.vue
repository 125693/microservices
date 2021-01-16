<template>
    <div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <h1>Ingredientes en almacen</h1>
                        </div>
                        <b-table
                            striped
                            hover
                            :items="records"
                            :fields="fields"
                        ></b-table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            resource: "ingredients",
            records: [],
            fields: [
                {
                    label: "Ingrediente",
                    key: "name",
                    class: "text-center"
                },
                {
                    label: "Cantidad",
                    key: "quantity",
                    class: "text-center"
                }
            ]
        };
    },
    mounted() {},
    created() {
        this.getRecords();
    },
    methods: {
        getRecords() {
            this.$http.get(`api/${this.resource}/records`).then(response => {
                this.records = response.data;
            });
        }
    }
};
</script>
<style scoped>
.title {
    display: inline;
}
.right {
    float: right;
}
</style>
