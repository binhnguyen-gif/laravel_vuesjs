<template>
    <div class="list-rendering">
        <p v-for="(value, index) in foods">{{ value.name }} - {{ index }}</p>
        <p v-for="(value, key, index) of retaurant">{{ value }} - {{ key }} - {{ index }}</p>
        <br>
        <p>Test:</p>
        <p v-for="todo in listCompleteTodo">{{ todo.name }}</p>
    </div>
</template>

<script>
export default {
    data() {
        return {
            foods: [
                { name: 'Hamburger' },
                { name: 'Sandwich' },
                { name: 'Chicken chop' },
            ],
            retaurant: {
                id: 1,
                name: 'Hao',
                year: 2000
            },
            todos: [
                {
                    name: 'to do 1',
                    isComplete: true
                },
                {
                    name: 'to do 2',
                    isComplete: false
                },
                {
                    name: 'to do 3',
                    isComplete: true
                },
            ]
        }
    },
    computed: {
      listCompleteTodo() {
          return this.todos.filter((item) => item.isComplete)
      }
    }
}
</script>

<style lang="scss" scoped>
</style>
