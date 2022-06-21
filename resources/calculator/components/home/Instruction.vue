<template>
    <div>
        <div class="form-group mt-1">
            <label
                >Specific Instructions <span class="text-danger">*</span></label
            >
            <textarea
                class="form-control shadow-none"
                v-model="form.instruction"
                placeholder="E.g., preferred paper structure, outline, grading scale, or any particular work focus."
            ></textarea>
            <div class="invalid-feedback d-block" v-if="errors.instruction">
                {{ errors.instruction[0] }}
            </div>
        </div>
        <h4 class="text-right my-3">
            {{ total }}
        </h4>
        <button
            class="w-100 btn btn-lg btn shadow-none"
            v-on:click.prevent="submit()"
        >
            Order Now
        </button>
    </div>
</template>

<script>
export default {
    props: {
        upload_attachment_url: {
            type: String,
            default() {
                return null;
            }
        },
        data: {
            type: Object,
            default() {
                return {};
            }
        },
        term_and_condition_url: {
            type: String,
            default() {
                return null;
            }
        },
        privacy_policy_url: {
            type: String,
            default() {
                return null;
            }
        },
        total: {
            type: String
        },

        errors: {
            type: Object,
            default() {
                return null;
            }
        }
    },
    computed: {
        classObject: function() {
            return {
                "text-danger": this.error && this.error.type === "fatal"
            };
        }
    },
    // mounted() {
    //     console.log(this.agreedToTermsChecked);
    // },
    data() {
        return {
            form: {
                title: "Test",
                instruction: "",
                files_data: []
            },
            uploadUrl: this.upload_attachment_url,
            uploadHeaders: {
                "X-Test-Header": "vue-file-agent",
                "X-CSRF-TOKEN": document.querySelector(
                    'meta[name="csrf-token"]'
                ).content
            },
            filesDataForUpload: []
        };
    },

    methods: {
        changeTab(tabNumber) {
            this.$emit("changeTab", tabNumber);
        },
        submit() {
            this.$emit("submitRequest", this.form);
        },
        uploadFiles: function() {
            // Using the default uploader. You may use another uploader instead.
            this.$refs.vueFileAgent.upload(
                this.uploadUrl,
                this.uploadHeaders,
                this.filesDataForUpload
            );
            this.filesDataForUpload = [];
        },
        deleteUploadedFile: function(fileData) {
            // Using the default uploader. You may use another uploader instead.
            this.$refs.vueFileAgent.deleteUpload(
                this.uploadUrl,
                this.uploadHeaders,
                fileData
            );
        },
        filesSelected: function(filesDataNewlySelected) {
            var validFilesData = filesDataNewlySelected.filter(
                fileData => !fileData.error
            );
            this.filesDataForUpload = this.filesDataForUpload.concat(
                validFilesData
            );
            this.uploadFiles();
        },
        fileDeleted: function(fileData) {
            var i = this.filesDataForUpload.indexOf(fileData);
            if (i !== -1) {
                this.filesDataForUpload.splice(i, 1);
            } else {
                this.deleteUploadedFile(fileData);
            }
        }
    }
};
</script>
