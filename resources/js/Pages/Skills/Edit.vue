<template>
  <Head title="Edit SKill" />
  <AuthenticatedLayout>
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">Edit post</h2>
    </template>

    <div class="py-12">
      <div class="mx-auto sm:px-6 lg:px-8 bg-white">
        <form class="p-4" @submit.prevent="submit">
          <div>
            <InputLabel for="title" value="Title" />

            <TextInput
              id="title"
              type="text"
              class="mt-1 block w-full"
              v-model="form.title"
              autofocus
              autocomplete="title"
            />

            <InputError class="mt-2" :message="form.errors.title" />
          </div>

          <div class="mt-2">
            <InputLabel for="image" value="Image" />

            <TextInput
              id="image"
              type="file"
              class="mt-1 block w-full"
              @input="form.image = $event.target.files[0]"
            />

            <InputError class="mt-2" :message="form.errors.image" />
          </div>

          <div>
            <InputLabel for="content" value="Content" />

            <textarea
                rows="15"
                cols="50"
                id="content"
                type="text"
                class="mt-1 block w-full"
                v-model="form.content"
                autofocus
                autocomplete="content"
            />

            <InputError class="mt-2" :message="form.errors.content" />
        </div>

          <div class="flex items-center justify-end mt-4">
            <PrimaryButton
              class="ml-4"
              :class="{ 'opacity-25': form.processing }"
              :disabled="form.processing"
            >
              Update
            </PrimaryButton>
          </div>
        </form>
      </div>
    </div>
  </AuthenticatedLayout>
</template>

<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head, useForm } from "@inertiajs/vue3";
import InputError from "@/Components/InputError.vue";
import InputLabel from "@/Components/InputLabel.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import TextInput from "@/Components/TextInput.vue";
import { Inertia } from '@inertiajs/inertia';

const props = defineProps({
  post: Object,
});
const form = useForm({
  title: props.post?.title,
  image: null,
  content: props.post?.content,
});

const submit = () => {
    Inertia.post(`/posts/${props.post.id}`, {
        _method: "put",
        title   : form.titletitle,
        image   : form.image,
        content : form.content,
    });
};
</script>

<style></style>
