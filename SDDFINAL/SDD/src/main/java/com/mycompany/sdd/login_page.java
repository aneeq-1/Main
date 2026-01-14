/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package com.mycompany.sdd;

import javax.swing.*;
import java.awt.*;
import java.awt.event.*;
import java.io.IOException;
import java.io.BufferedReader;
import java.io.FileReader;


/**
 *
 * @author imahmo26
 */
public class login_page extends JFrame {
    
    
  // defining each user as a constant variable to use when defining which login some1 has used
    private static final String USER = "USER";
    private static final String AC = "AC";
    private static final String SA = "SA";
    private static final String SM = "SM";
    private static final String DIGM = "DIGM";
    private static final String DIGL = "DIGL";
    
    class login_check {
        public String checkLogin(String username, String password) {
            try (BufferedReader reader = new BufferedReader(
                new FileReader("src/main/resources/Users.txt"))) {
            
            String line;
            while ((line = reader.readLine()) != null) {
                line = line.trim();
                if (line.isEmpty() || line.startsWith("#")) {
                    continue;
                }
                    
                    String[] parts = line.split(",");
                    if (parts.length >= 4) {
                        String storedName = parts[0].trim();
                        String storedRole = parts[1].trim();
                        String storedPassword = parts[3].trim();
                        
if (storedName.equalsIgnoreCase(username) && storedPassword.equals(password)) {
                            return storedRole;
                        }
                    }
                }
            } catch (IOException e) {
                e.printStackTrace();
            }
            return null;
        }
    }
    
    public login_page() {
        setTitle("Login Page");
        setSize(600,500);
        setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        setLayout(new BorderLayout(10, 10));
    

// North panel
        JPanel north_panel = new JPanel();
        JLabel title = new JLabel("Welcome to the Login page!");
        north_panel.add(title);
        getContentPane().add(north_panel, BorderLayout.NORTH);
        
        // Center panel
        JPanel center_panel = new JPanel();
        center_panel.setLayout(new GridLayout(3,2,10,10));
        
        JLabel email = new JLabel("Username:");
        email.setFont(new Font("Arial", Font.PLAIN, 16));
        JTextField email_input = new JTextField();
        center_panel.add(email); 
        center_panel.add(email_input);
        
        JLabel password = new JLabel("Password:");
        password.setFont(new Font("Arial", Font.PLAIN, 16));
        JPasswordField password_input = new JPasswordField();
        center_panel.add(password);
        center_panel.add(password_input);
        
getContentPane().add(center_panel, BorderLayout.CENTER);
        
        // South panel
        JPanel south_panel = new JPanel();
        JButton login_button = new JButton("Login");
        login_button.setFont(new Font("Arial", Font.BOLD, 16));
        login_button.setPreferredSize(new Dimension(150, 40));
        
        login_button.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent e) {
                String username = email_input.getText().trim();
                String password = new String(password_input.getPassword()).trim();
                
 login_check checker = new login_check();
                String userRole = checker.checkLogin(username, password);
                
                if (userRole != null) {
                    JOptionPane.showMessageDialog(login_page.this, 
                        "Login Successful!\nWelcome, " + username + "!");
                    openDashboard(userRole);
                    dispose();
                } else {
                    JOptionPane.showMessageDialog(login_page.this, 
                        "Invalid username or password", 
                        "Login Error", 
                        JOptionPane.ERROR_MESSAGE);
                    password_input.setText("");
                }
            }
        });
        
south_panel.add(login_button);
        getContentPane().add(south_panel, BorderLayout.SOUTH);
    }
    
    private void openDashboard(String userRole) {
        switch(userRole) {
            case USER:
                new USER_page().setVisible(true);
                break;
            case AC:
                new AC_page().setVisible(true);
                break;
            case SA:
                new SA_page().setVisible(true);
                break;
            case SM:
                 new SM_page().setVisible(true);
                break;
            case DIGM:
                new DIGM_page().setVisible(true);
                break;
            case DIGL:
                new DIGL_page().setVisible(true);
                break;
            default:
                JOptionPane.showMessageDialog(this, 
                    "No page defined for role: " + userRole,
                    "Error",
                    JOptionPane.ERROR_MESSAGE);
        }
    }
    public static void main(String[] args) {
        SwingUtilities.invokeLater(() -> {
            new login_page().setVisible(true);
        });
    }
}