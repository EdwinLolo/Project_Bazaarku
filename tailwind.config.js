/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", "ui-sans-serif", "system-ui"],
            },
            colors: {
                // Primary brand colors - sesuai dengan gambar
                brand: {
                    primary: "#1E40AF", // Blue navbar background
                    secondary: "#3B82F6", // Lighter blue for hover
                    accent: "#60A5FA", // Light blue for accents
                },
                // Custom colors untuk konsistensi
                bazarku: {
                    blue: {
                        dark: "#1E40AF", // Dark blue untuk navbar
                        medium: "#3B82F6", // Medium blue
                        light: "#60A5FA", // Light blue
                        pale: "#DBEAFE", // Very light blue
                    },
                    white: "#FFFFFF", // Pure white
                    gray: {
                        dark: "#374151", // Dark gray text
                        medium: "#6B7280", // Medium gray text
                        light: "#F3F4F6", // Light gray background
                        pale: "#F9FAFB", // Very light gray
                    },
                    text: {
                        primary: "#1F2937", // Primary text color
                        secondary: "#6B7280", // Secondary text color
                        white: "#FFFFFF", // White text
                    },
                },
            },
        },
    },
    plugins: [],
};
