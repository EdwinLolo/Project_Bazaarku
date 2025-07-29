@extends('layouts.app')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gray-900 py-8">
    <div class="bg-white rounded-2xl shadow-lg flex w-full max-w-4xl overflow-hidden">
        <!-- Left: Logo -->
        <div class="flex-1 flex items-center justify-center bg-blue-800 p-8">
            <div class="w-full flex items-center justify-center">
                <div class="bg-blue-800 rounded-xl flex items-center justify-center w-72 h-72">
                    <svg width="200" height="200" viewBox="0 0 200 200" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="200" height="200" rx="32" fill="#0033B3"/>
                        <rect x="35" y="60" width="130" height="80" rx="10" fill="white"/>
                        <text x="50" y="130" font-size="32" font-family="Arial, Helvetica, sans-serif" fill="#0033B3" font-weight="bold">Bazaarku.</text>
                    </svg>
                </div>
            </div>
        </div>
        <!-- Right: Form -->
        <div class="flex-1 p-10 flex flex-col justify-center">
            <h2 class="text-3xl font-bold mb-2">Create an account</h2>
            <p class="mb-6 text-gray-600">Already have an account? <a href="{{ route('login') }}" class="text-blue-700 underline">Log in</a></p>
            <form method="POST" action="{{ route('register') }}" class="space-y-4">
                @csrf
                <div class="flex space-x-2">
                    <input type="text" name="first_name" placeholder="First Name" class="w-1/2 px-4 py-2 rounded bg-gray-200 focus:outline-none" required>
                    <input type="text" name="last_name" placeholder="Last Name" class="w-1/2 px-4 py-2 rounded bg-gray-200 focus:outline-none" required>
                </div>
                <input type="email" name="email" placeholder="Email" class="w-full px-4 py-2 rounded bg-gray-200 focus:outline-none" required>
                <div class="relative">
                    <input type="password" name="password" placeholder="Enter your Password" class="w-full px-4 py-2 rounded bg-gray-200 focus:outline-none pr-10" required>
                    <span class="absolute right-3 top-3 text-gray-500 cursor-pointer">
                        <!-- Eye icon (optional, JS toggle) -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" /></svg>
                    </span>
                </div>
                <div class="flex items-center">
                    <input type="checkbox" name="terms" id="terms" class="mr-2" required>
                    <label for="terms" class="text-sm">I agree to <a href="#" class="text-blue-700 underline">Terms and Conditions</a></label>
                </div>
                <button type="submit" class="w-full py-2 rounded border border-gray-400 font-semibold hover:bg-gray-100">Create Account</button>
            </form>
            <div class="flex items-center my-4">
                <div class="flex-grow border-t border-gray-300"></div>
                <span class="mx-2 text-gray-400">Or register with</span>
                <div class="flex-grow border-t border-gray-300"></div>
            </div>
            <div class="flex space-x-4">
                <a href="{{ route('social.redirect', 'google') }}" class="flex-1 flex items-center justify-center py-2 border border-gray-400 rounded hover:bg-gray-100">
                    <svg class="w-5 h-5 mr-2" viewBox="0 0 48 48"><g><path fill="#4285F4" d="M44.5 20H24v8.5h11.7C34.7 33.1 29.8 36 24 36c-6.6 0-12-5.4-12-12s5.4-12 12-12c3.1 0 5.9 1.1 8.1 2.9l6.4-6.4C34.5 5.1 29.5 3 24 3 12.4 3 3 12.4 3 24s9.4 21 21 21c10.5 0 20-8.1 20-21 0-1.3-.1-2.7-.3-4z"/><path fill="#34A853" d="M6.3 14.7l7 5.1C15.5 17.1 19.4 14 24 14c3.1 0 5.9 1.1 8.1 2.9l6.4-6.4C34.5 5.1 29.5 3 24 3 15.1 3 7.6 8.7 6.3 14.7z"/><path fill="#FBBC05" d="M24 44c5.5 0 10.5-1.8 14.4-4.9l-6.7-5.5C29.9 35.7 27.1 36.5 24 36.5c-5.8 0-10.7-2.9-13.7-7.2l-7 5.4C7.6 39.3 15.1 44 24 44z"/><path fill="#EA4335" d="M44.5 20H24v8.5h11.7C34.7 33.1 29.8 36 24 36c-6.6 0-12-5.4-12-12s5.4-12 12-12c3.1 0 5.9 1.1 8.1 2.9l6.4-6.4C34.5 5.1 29.5 3 24 3 12.4 3 3 12.4 3 24s9.4 21 21 21c10.5 0 20-8.1 20-21 0-1.3-.1-2.7-.3-4z"/></g></svg>
                    Google
                </a>
                <a href="{{ route('social.redirect', 'apple') }}" class="flex-1 flex items-center justify-center py-2 border border-gray-400 rounded hover:bg-gray-100">
                    <svg class="w-5 h-5 mr-2" viewBox="0 0 24 24"><path fill="black" d="M16.365 1.43c0 1.14-.93 2.07-2.07 2.07-.04 0-.08 0-.12-.01-.02-.04-.03-.09-.03-.14 0-1.13.92-2.06 2.07-2.06.05 0 .09.01.13.01.01.04.02.09.02.13zm2.13 4.13c-1.14-.07-2.1.65-2.65.65-.56 0-1.42-.63-2.34-.61-.96.02-1.85.56-2.34 1.43-.99 1.71-.25 4.24.71 5.63.47.68 1.03 1.44 1.77 1.41.7-.03.97-.45 1.82-.45.85 0 1.09.45 1.82.44.75-.01 1.23-.69 1.7-1.37.54-.77.76-1.52.77-1.56-.02-.01-1.48-.57-1.5-2.25-.01-1.41 1.15-2.08 1.2-2.11-.66-.97-1.7-1.08-2.07-1.1zm-2.13 13.13c-.41 0-.82-.12-1.16-.34-.34-.22-.62-.53-.81-.91-.19-.38-.29-.8-.29-1.23 0-.43.1-.85.29-1.23.19-.38.47-.69.81-.91.34-.22.75-.34 1.16-.34.41 0 .82.12 1.16.34.34.22.62.53.81.91.19.38.29.8.29 1.23 0 .43-.1.85-.29 1.23-.19.38-.47.69-.81.91-.34.22-.75.34-1.16.34z"/></svg>
                    Apple
                </a>
            </div>
        </div>
    </div>
</div>
@endsection 