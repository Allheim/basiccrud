<x-layout>

    <x-errors/>

    <x-success/>

    <form method="POST">
       
        @method('PATCH')

        <x-logs.forms :booking="$booking"/>
       

    </form>
    <!-- Simplicity is an acquired taste. - Katharine Gerould -->
</x-layout>
