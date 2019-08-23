@extends('principal')
@section('contenido')
<template v-if="menu==0">
    <example-component></example-component>
</template>
<template v-if="menu==1">
    contenido 1
</template>
<template v-if="menu==2">
    contenido 2
</template>
<template v-if="menu==3">
    contenido 3
</template>
<template v-if="menu==4">
    contenido 4
</template>
<template v-if="menu==5">
    contenido 5
</template>
<template v-if="menu==6">
    contenido 6
</template>
<template v-if="menu==7">
    contenido 7
</template>
<template v-if="menu==8">
    contenido 8
</template>
@endsection