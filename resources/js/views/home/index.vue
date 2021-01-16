<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h1>Jornada de almuerzo ¡gratis!</h1>
                    </div>

                    <div class="card-body">
                        <b-button
                            class="right"
                            @click="generateOrder"
                            variant="outline-primary"
                            >Ordenar Plato</b-button
                        >
                        <br />
                        <span v-if="records.length">Ordenes Genearadas</span>
                        <li v-for="(recipe, index) in records" :key="index">
                            Orden {{ recipe.id }} - {{ recipe.name }}
                        </li>
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
            resource: "recipes",
            records: []
        };
    },
    mounted() {},
    created() {},
    methods: {
        generateOrder() {
            this.$http.get(`api/${this.resource}/random`).then(response => {
                this.$http
                    .post(`api/orders/recipes/create`, response.data)
                    .then(resp => {
                        response.data.id = resp.data.id;
                        this.records.push(response.data);
                    });
            });
        }
    }
};
</script>
