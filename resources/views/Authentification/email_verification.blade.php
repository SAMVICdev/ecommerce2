<x-layouts.app>
    <article class="container mt-5">
        <header class="text-center">
            <h1 class="text-3xl font-bold mb-4">Email Verification</h1>
        </header>

        <section>
            <p class="text-center text-gray-700 mb-4">Vous devez valider votre email pour aller plus loin.</p>
            <p class="text-center text-gray-700 mb-4">Si vous n'avez pas reçu l'email, cliquez sur le bouton ci-dessous pour en demander un autre.</p>

            <form action="{{ route('verification.resend') }}" method="POST" class="max-w-md mx-auto bg-white p-6 rounded shadow-md">
                @csrf
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Renvoyer l'Email de Vérification</button>
            </form>
        </section>
    </article>