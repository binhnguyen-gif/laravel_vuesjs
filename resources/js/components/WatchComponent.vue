<template>
    <div>
        <p class="p-0.5 text-red-800">{{ count }}</p>
        <button @click="updateCount" class="bg-blend-color-burn text-danger p-1.5 border-2 rounded">Update Number
        </button>

        <p class="p-0.5 text-red-800 mt-9">{{ count }}</p>

        <section class="mx-auto max-w-[1130px] my-4">
            <div class="flex justify-between items-center max-[991px]:flex-wrap">
                <div class="image-banner w-1/2 max-w-[552px] max-[991px]:w-full">
                    <img src="https://www.beanbagsrus.com.au/media/wysiwyg/catalog/moet-chandon-beanbag.jpg"
                         alt="image-banner">
                </div>
                <div class="w-1/2 py-[16px] max-w-[520px] p-[1rem] max-[991px]:w-full">
                    <h2 class="product__content-title text-left text-[#112146] my-[24px] text-[34px] font-extrabold">
                        upgrade your down time
                    </h2>
                    <p class="leading-[26px] text-[#112146] text-[16px]">The chunky-but-sleek Merlin is a large bean bag
                        chair made for adults and kids. It's just as
                        comfortable and stylish as all of our quality bean bags, but a little extra magic lies in its
                        unique
                        and trendy design. The Merlin provides strong back, neck and head support where it’s needed
                        most.
                        And when you're seated in its plush embrace, its slender, tapered top allows access to your head
                        and
                        neck. This makes it especially valuable to anyone who loves getting a neck massage while they
                        relax.
                        It also features a convenient handle located at its top, so you can carry it easily and hang it
                        up
                        when it’s not in use.</p>
                </div>
            </div>
            <div class="area">
                <h2 class="text-left text-[#112146] my-[24px] text-[34px] font-extrabold">
                    add colour to any area
                </h2>
                <p class="leading-[26px] text-[#112146] text-[16px]">
                    With eleven colours to choose from, you can match the Merlin to almost any decor or setting inside
                    or
                    outside your home. Choose two or more coordinating colours to accent your patio and poolside areas.
                    Place a
                    Merlin or two in your home gym or den. Because it’s lightweight and easy to transport, you can take
                    your
                    Merlin bean bag chair to sports events, outdoor concerts or the beach. You’ll be the most
                    comfortable person
                    on the premises. The Merlin isn’t limited to home use; it’s also a popular commercial product
                    suitable for
                    use by schools, resorts, hotels, libraries, hospitals and shopping centres. Its childproof safety
                    zippers
                    make it safe for use around little ones and pets.
                </p>
            </div>
            <div class="matters flex justify-between items-center max-[991px]:flex-wrap">
                <div class="matters-content w-1/2 max-w-[520px] p-[1rem] max-[991px]:w-full">
                    <h2 class="text-left text-[#112146] my-[24px] text-[34px] font-extrabold">
                        when quality matters
                    </h2>
                    <p class="leading-[26px] text-[#112146] text-[16px]">
                        Like our other quality bean bags, the Merlin’s outer surface consists of 1680D PU-coated
                        polyester
                        fabric. The cover is whisper-soft to your skin but tough enough to take serious abuse. It’s
                        water-resistant, so you won’t have to worry about rain, and it also resists mould, mildew,
                        stains
                        and damage from direct sunlight. Your Merlin bean bag is built to last for years with minimal
                        care.
                        If it gets soiled, simply clean it with a damp cloth and mild detergent. This prodyct includes a
                        removable inner liner for easy filling and cleaning.
                    </p>
                </div>
                <div class="w-1/2 max-w-[552px] max-[991px]:w-full">
                    <img src="https://www.beanbagsrus.com.au/media/wysiwyg/catalog/product-grid2.png"
                         class="rounded-l-[15px]" alt="">
                </div>
            </div>
            <div class="area p-[1rem]">
                <h2 class="text-left text-[#112146] my-[24px] text-[34px] font-extrabold">
                    add personalisation for your next event
                </h2>
                <p class="leading-[26px] text-[#112146] text-[16px]">
                    If you’re promoting a business or organization, we can heat-transfer your logo or message directly
                    onto your Merlin to create an attractive, personalised bean bag and an evergreen marketing tool that
                    will never escape notice. When someone in your life needs a little extra comfort, the Merlin makes a
                    great gift. It even comes packaged in a clear carrying bag. Ask about our Personalised Bean Bags
                    today! Merlin is the preferred choice of famous brands such as Moët & Chandon, Foxtel, RACQ,
                    Chandon, Aperol Spritz and Dodo.

                    Most orders are delivered within three to five days after dispatch depending on your location. For
                    faster delivery, choose the Express Delivery option at checkout. View our range of bean bags for
                    schools.
                </p>
            </div>
        </section>


        <h1>{{ JSON.stringify(jsonData) }}</h1>
        <button @click="updateJson">
            Update
        </button>


        <div class="list-user mt-4">
            <table class="tbl-list-user">
                <thead>
                <th>Name</th>
                <th>Location</th>
                <th>DOB</th>
                </thead>
                <tbody>
                <tr v-for="user in userData">
                    <td><a @click="selectUser(user)">{{ user.name.title }} - {{ user.name.last }} {{ user.name.first }}</a></td>
                    <td>{{ user.location.city }}</td>
                    <td>{{ user.dob.date }}</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>
<script>
import data from '../data/data.json';
export default  {
    data() {
        return {
            userData: data
        }
    },
    methods: {
        selectUser(user) {
            this.$emit('userSelected', user)
        }
    }
}
</script>

<script setup>
import {watch, ref, reactive, computed, watchEffect} from "vue";

const count = ref(1);
const count1 = ref(0);
const count2 = reactive({count: 1});

const jsonData = ref({
    a: {
        b: 1,
        c: 2, d: {
            e: 1
        }
    }
})

const double = computed(() => {
    return count.value * 2;
})

// watch([count, count1], (count) => {
//     console.log(count);
// })

// watch(count2, (count) => {
//     console.log(count);
// })

watch(() => count1.value + count.value, (count) => {
    console.log(count);
})

watch(() => count.value, (current, old) => {
    console.log('Current value of count:', current, old)
})

watch(double, (current, old) => {
    console.log('Current value of count use computed:', current, old)
})

watch(jsonData, (current) => {
    console.log(current)
}, {deep: true})

watch(count, async (current) => {
const response = await fetch(
    `https://jsonplaceholder.typicode.com/todos/${current}`
)
    const json = await response.json()
    console.log(json)
}, {immediate: true})

watchEffect(async () => {

})

function updateJson() {
    jsonData.value.a = 1;
}

function updateCount() {
    count.value++;
    count1.value++;
    count2.count++;
}


</script>
