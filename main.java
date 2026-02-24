import java.io.Console;

public class Main {

    public static void main(String[] args) {
        Console console = System.console();
        
        if (console == null) {
            System.err.println("No console available");
            System.exit(1);
        }
        
        console.printf("Console is available\n");
        String name = console.readLine("Enter your name: ");
        console.printf("Hello, %s!\n", name);
    }
}
