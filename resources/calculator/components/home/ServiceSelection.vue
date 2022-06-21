<template>
    <div>
        <h4 class="card-title mb-2">
            Calculate The Price
        </h4>
        <div class="row">
            <div class="form-group col-6">
                <label>Guarantee</label>
                <multiselect
                    track-by="id"
                    label="name"
                    v-model="form.guarantee_model"
                    :options="guarantees"
                    :show-labels="false"
                    @input="setGuaranteId(form.guarantee_model)"
                ></multiselect>
            </div>
            <div class="form-group col-6">
                <label>Work Level</label>
                <multiselect
                    track-by="id"
                    label="name"
                    v-model="form.work_level_model"
                    :options="levels"
                    :show-labels="false"
                    @input="setWorkLevelId(form.work_level_model)"
                ></multiselect>
            </div>
        </div>
        <div class="row mt-1">
            <div
                class="form-group"
                :class="
                    form.service_model.price_type_id == pricingTypes.perPage ||
                    form.service_model.price_type_id == pricingTypes.perWord ||
                    form.service_model.price_type_id == pricingTypes.PerSlide
                        ? 'col-6'
                        : 'col-12'
                "
            >
                <label>Service Type</label>
                <multiselect
                    track-by="name"
                    label="name"
                    v-model="form.service_model"
                    :options="services"
                    group-label="category"
                    group-values="subcategory"
                    :group-select="false"
                    :show-labels="false"
                    @input="getAdditionalServices(form.service_model)"
                ></multiselect>
            </div>
            <!-- if service has number of slide option -->
            <div
                class="form-group col-6"
                v-if="form.service_model.price_type_id == pricingTypes.PerSlide"
            >
                <label class="">Slides</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <button
                            type="button"
                            class="btn btn-outline-secondary shadow-none"
                            v-on:click="changeSlideNumber(-1)"
                        >
                            -
                        </button>
                    </div>
                    <input
                        type="text"
                        class="form-control text-center shadow-none"
                        aria-describedby="basic-addon1"
                        v-model="form.number_of_slides"
                        v-on:keypress="isNumber($event)"
                        @change="validateNumberOfPages"
                    />
                    <div class="input-group-append">
                        <div class="input-group-prepend">
                            <button
                                type="button"
                                class="btn btn-outline-secondary shadow-none"
                                v-on:click="changeSlideNumber(1)"
                            >
                                +
                            </button>
                        </div>
                    </div>
                </div>
                <div
                    class="invalid-feedback d-block"
                    v-if="errors.number_of_slides"
                >
                    {{ errors.number_of_slides[0] }}
                </div>
            </div>
            <!-- if service has number of per page -->
            <div
                class="form-group col-6"
                v-if="form.service_model.price_type_id == pricingTypes.perPage"
            >
                <label>Pages <small>(275 words/page)</small></label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <button
                            type="button"
                            class="btn btn-outline-secondary shadow-none"
                            v-on:click="changePageNumber(-1)"
                        >
                            -
                        </button>
                    </div>
                    <input
                        type="number"
                        class="form-control text-center shadow-none"
                        aria-describedby="basic-addon1"
                        v-model="form.number_of_pages"
                        v-on:keypress="isNumber($event)"
                        @change="validateNumberOfPages"
                    />
                    <div class="input-group-append">
                        <div class="input-group-prepend">
                            <button
                                type="button"
                                class="btn btn-outline-secondary shadow-none"
                                v-on:click="changePageNumber(1)"
                            >
                                +
                            </button>
                        </div>
                    </div>
                </div>
                <div
                    class="invalid-feedback d-block"
                    v-if="errors.number_of_pages"
                >
                    {{ errors.number_of_pages[0] }}
                </div>
            </div>

            <!-- if service has number of per word -->
            <div
                class="form-group col-6"
                v-if="form.service_model.price_type_id == pricingTypes.perWord"
            >
                <label>Words <small>(275 words/page)</small></label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <button
                            type="button"
                            class="btn btn-outline-secondary shadow-none"
                            v-on:click="changeNumberOfWords(-20)"
                        >
                            -
                        </button>
                    </div>
                    <input
                        type="number"
                        class="form-control text-center shadow-none"
                        aria-describedby="basic-addon1"
                        v-model="form.number_of_words"
                        v-on:keypress="isNumber($event)"
                        @change="validateNumberOfWords"
                    />
                    <div class="input-group-append">
                        <div class="input-group-prepend">
                            <button
                                type="button"
                                class="btn btn-outline-secondary shadow-none"
                                v-on:click="changeNumberOfWords(20)"
                            >
                                +
                            </button>
                        </div>
                    </div>
                </div>
                <div
                    class="invalid-feedback d-block"
                    v-if="errors.number_of_words"
                >
                    {{ errors.number_of_words[0] }}
                </div>
            </div>
        </div>

        <div class="row mt-1">
            <div class="form-group col-6">
                <div class="form-group">
                    <label class="">Deadline (EST)</label>
                    <multiselect
                        track-by="id"
                        label="name"
                        v-model="form.urgency_model"
                        :options="urgencies"
                    ></multiselect>
                </div>
            </div>
            <div class="form-group col-6">
                <div class="form-group">
                    <label class="">Subject</label>
                    <multiselect
                        track-by="id"
                        label="name"
                        v-model="data.subject"
                        :options="subjects"
                        :show-labels="false"
                    ></multiselect>
                    <div class="invalid-feedback d-block" v-if="errors.subject">
                        {{ errors.subject[0] }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import Multiselect from "vue-multiselect";
import Datepicker from "vuejs-datepicker";

export default {
    components: {
        Multiselect,
        Datepicker
    },
    props: {
        pricingTypes: {
            default: {}
        },
        data: {
            type: Object,
            default() {
                return {};
            }
        },
        services: {
            default: {}
        },
        subjects: {
            default: {}
        },
        levels: {
            type: Array,
            default() {
                return {};
            }
        },
        urgencies: {
            type: Array,
            default() {
                return {};
            }
        },
        guarantees: {
            type: Array,
            default() {
                return {};
            }
        },
        spacings: {
            type: Array,
            default() {
                return {};
            }
        },
        user_id: {
            type: [Boolean, Number],
            default() {
                return null;
            }
        },
        restricted_order_page_url: {
            type: String,
            default() {
                return null;
            }
        },
        additional_services_by_service_id_url: {
            type: String,
            default() {
                return null;
            }
        },
        sub_categories_by_service_id: {
            type: String,
            default() {
                return null;
            }
        },
        create_account_url: {
            type: String,
            default() {
                return null;
            }
        }
    },

    filters: {
        formatMoney: function(value) {
            return accounting.formatMoney(value, currencyConfig.currency);
        }
    },
    created() {
        this.triggerChange(this.form);
        this.getAdditionalServices(this.form.service_model);
    },
    watch: {
        form: {
            handler(val) {
                this.triggerChange(val);
            },
            deep: true
        },
        data: {
            handler(val) {
                this.handleDate();
            },
            deep: true
        },
        errors: {
            handler(val) {
                this.checkError(val);
            },
            deep: true
        }
    },

    data() {
        return {
            hasError: false,
            errors: {},
            isDisable: false,
            additional_services: [],
            sub_categories: this.services ? this.services[0] : {},
            form: {
                subject: this.subjects ? this.subjects[0] : {},
                customDate: new Date(),
                service_model: this.services
                    ? this.services[0].subcategory[0]
                    : {},
                sub_category: null,
                urgency_model: this.urgencies ? this.urgencies[0] : {},
                work_level_model: this.levels ? this.levels[0] : {},
                work_level_id: this.levels ? this.levels[0].id : 1,
                guarantee_model: this.guarantees ? this.guarantees[1] : {},
                guarantee_id: this.guarantees ? this.guarantees[0].id : 1,
                number_of_words: this.services[0].subcategory[0]
                    .minimum_order_quantity,
                number_of_pages: this.services[0].subcategory[0]
                    .minimum_order_quantity,
                number_of_slides: this.services[0].subcategory[0]
                    .minimum_order_quantity,
                spacing_type: "double",
                added_services: []
            }
        };
    },
    methods: {
        checkError() {
            var errorList = JSON.parse(JSON.stringify(this.errors));
            this.hasError = Object.keys(errorList).length > 0 ? true : false;
        },
        triggerChange(form) {
            this.$emit("dataChanged", form);
        },
        formatMoneyFromNumber($amount) {
            return accounting.formatMoney($amount, currencyConfig.currency);
        },
        workLevelChanged(work_level_id, index) {
            this.form.work_level_model = this.levels[index];

            this.form.work_level_id = work_level_id;
        },
        guaranteeChanged(guarantee_id, index) {
            this.form.guarantee_model = this.guarantees[index];
            this.form.guarantee_id = guarantee_id;
        },
        spacingTypeChanged(type) {
            this.form.spacing_type = type;
        },

        changePageNumber(changeByValue) {
            var changeByValue = parseInt(changeByValue);
            var number_of_pages = parseInt(this.form.number_of_pages);
            if (number_of_pages == 0 && changeByValue < 1) {
                return false;
            }
            if (!Number.isInteger(changeByValue)) {
                return false;
            }
            this.form.number_of_pages = number_of_pages + changeByValue;
            this.validateNumberOfPages();
        },
        changeSlideNumber(changeByValue) {
            var changeByValue = parseInt(changeByValue);
            var number_of_slides = parseInt(this.form.number_of_slides);
            if (number_of_slides == 0 && changeByValue < 1) {
                return false;
            }
            if (!Number.isInteger(changeByValue)) {
                return false;
            }
            this.form.number_of_slides = number_of_slides + changeByValue;
            this.validateNumberOfSlides();
        },
        changeNumberOfWords(changeByValue) {
            var changeByValue = parseInt(changeByValue);
            var number_of_words = parseInt(this.form.number_of_words);

            if (number_of_words == 0 && changeByValue < 1) {
                return false;
            }
            this.form.number_of_words = number_of_words + changeByValue;
            this.validateNumberOfWords();
        },
        validateNumberOfWords() {
            if (
                this.form.number_of_words <
                this.form.service_model.minimum_order_quantity
            ) {
                var minimum_order_quantity = this.form.service_model
                    .minimum_order_quantity;
                this.$set(this.errors, "number_of_words", [
                    "Minium order quantity is " + minimum_order_quantity
                ]);
            } else {
                this.$delete(this.errors, "number_of_words");
            }
            this.$delete(this.errors, "number_of_pages");
        },
        validateNumberOfPages() {
            if (
                this.form.number_of_pages <
                this.form.service_model.minimum_order_quantity
            ) {
                var minimum_order_quantity = this.form.service_model
                    .minimum_order_quantity;
                this.$set(this.errors, "number_of_pages", [
                    "Minium order quantity is " + minimum_order_quantity
                ]);
            } else {
                this.$delete(this.errors, "number_of_pages");
            }
            this.$delete(this.errors, "number_of_words");
        },
        validateNumberOfSlides() {
            if (
                this.form.number_of_slides <
                this.form.service_model.minimum_order_quantity
            ) {
                var minimum_order_quantity = this.form.service_model
                    .minimum_order_quantity;
                this.$set(this.errors, "number_of_slides", [
                    "Minium order quantity is " + minimum_order_quantity
                ]);
            } else {
                this.$delete(this.errors, "number_of_slides");
            }
            this.$delete(this.errors, "number_of_pages");
        },
        getAdditionalServices(service_model) {
            var service_id;
            // checking if category is parent then get additional service for id and if child then for parent service id
            if (parseInt(service_model.parent) === 1) {
                service_id = service_model.id;
            } else {
                service_id = service_model.service_id;
                // if service is child then set sub_category as service
                this.form.sub_category = service_model;
            }

            // Clear the errors
            this.errors = {};
            // Clear the added services
            this.$set(this.form, "added_services", []);

            // var service_id = service_model.id;
            var minimum_order_quantity = service_model.minimum_order_quantity;

            if (service_model.price_type_id == this.pricingTypes.perPage) {
                this.form.number_of_pages = minimum_order_quantity;
            } else {
                this.form.number_of_pages = 1;
            }

            if (service_model.minimum_order_quantity) {
                this.form.number_of_words = minimum_order_quantity;
            } else {
                this.form.number_of_words = 500;
            }

            var $scope = this;
            axios
                .post(this.additional_services_by_service_id_url, {
                    service_id: service_id
                })
                .then(function(response) {
                    $scope.additional_services = response.data;
                })
                .catch(function(error) {
                    alert("Something went wrongs");
                });
        },
        setGuaranteId(item) {
            this.form.guarantee_id = item.id;
        },
        setWorkLevelId(item) {
            this.formwork_level_id = item.id;
        },
        changeTab(tabNumber) {
            this.$emit("changeTab", tabNumber);
        },
        additionalServiceChanged(id, additionalService) {
            var isAlreadyInList = this.addedServiceList(id);

            if (isAlreadyInList) {
                this.form.added_services.splice(isAlreadyInList.key, 1);
            } else {
                this.form.added_services.push(additionalService);
            }
        },
        addedServiceList(id) {
            var status = false;

            $.each(this.form.added_services, function(key, row) {
                if (row.id == id) {
                    return (status = { key: key });
                }
            });

            return status;
        },
        getServiceContainerClass(additionalServiceId) {
            return {
                "btn-orange": this.addedServiceList(additionalServiceId),
                "btn-outline-orange": !this.addedServiceList(
                    additionalServiceId
                )
            };
        },
        isNumber: function(evt) {
            evt = evt ? evt : window.event;
            var charCode = evt.which ? evt.which : evt.keyCode;
            if (charCode > 31 && (charCode < 48 || charCode > 57)) {
                evt.preventDefault();
            } else {
                return true;
            }
        }
    }
};
</script>

<style lang="scss" scoped>
@import "~vue-multiselect/dist/vue-multiselect.min.css";

html {
    scroll-behavior: smooth;
}

@media (prefers-reduced-motion: reduce) {
    html {
        scroll-behavior: auto;
    }
}

input[type="number"] {
    -moz-appearance: textfield;
}
</style>
