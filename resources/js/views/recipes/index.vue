<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="row">
                <b-card
                    v-for="(recipe, index) in records"
                    :key="index"
                    :title="recipe.name"
                    style="max-width: 20rem; margin: auto"
                    class="mb-2"
                >
                    <b-card-text style="height: 10rem">
                        Ingredientes del plato y cantindad
                        <li
                            v-for="(ingredient, index) in recipe.ingredients"
                            :key="index"
                        >
                            {{ ingredient.name }} -
                            {{ ingredient.pivot.quantity }}
                        </li>
                    </b-card-text>
                </b-card>
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
<style scoped></style>
