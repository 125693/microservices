<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h1 class="title">Registro de Ordenes</h1>
                        <b-button
                            class="right"
                            @click="getRecords"
                            variant="outline-primary"
                            >Actualizar</b-button
                        >
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
</template>

<script>
export default {
    data() {
        return {
            resource: "orders/recipes",
            records: [],
            fields: [
                {
                    label: "Plato",
                    key: "recipe.name",
                    class: "text-center"
                },
                {
                    label: "Estado",
                    key: "state",
                    class: "text-center"
                },
                {
                    label: "Fecha de Pedido",
                    key: "created_at",
                    class: "text-center",
                    sortable: true
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
