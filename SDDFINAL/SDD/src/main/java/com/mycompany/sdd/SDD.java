/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 */

package com.mycompany.sdd;
import java.awt.*;
import javax.swing.*;
import java.awt.event.*;
        
/**
 *
 * @author imahmo26
 */
public class SDD extends JFrame implements ActionListener{
       
    //method with all the dark mode colours- stakeholder req.
    private static void setSimpleDarkMode() {
    UIManager.put("Panel.background", Color.DARK_GRAY);
    UIManager.put("Label.foreground", Color.WHITE);
    UIManager.put("Label.background", Color.DARK_GRAY);
    UIManager.put("Button.background", new Color(80, 80, 80));
    UIManager.put("Button.foreground", Color.DARK_GRAY);
    UIManager.put("TextField.background", new Color(70, 70, 70));
    UIManager.put("TextField.foreground", Color.WHITE);
    UIManager.put("TextArea.background", new Color(70, 70, 70));
    UIManager.put("TextArea.foreground", Color.WHITE);
    UIManager.put("Table.background", new Color(60, 60, 60));
    UIManager.put("Table.foreground", Color.WHITE);
    UIManager.put("TableHeader.background", new Color(80, 80, 80));
    UIManager.put("TableHeader.foreground", Color.WHITE);
    UIManager.put("ScrollPane.background", Color.DARK_GRAY);
    UIManager.put("Viewport.background", Color.DARK_GRAY);
}
    
    //MAin method !!
    public SDD() {
        
        //calling/implementing the dark mode settings
        setSimpleDarkMode();
        setLayout(new BorderLayout());
        
        
        //--north panel logoo with image-
        JPanel north_panel = new JPanel(new FlowLayout(FlowLayout.CENTER));
        
        //using the image path file to get the image
          ImageIcon originalIcon = new ImageIcon(getClass().getResource("/images/BFDCITYOFCULTURE.jpeg")); // Path to your image
        Image originalImage = originalIcon.getImage();
         JLabel logoImage;
       
         //scaling the image to fit in the box
       Image scaledImage = originalIcon.getImage().getScaledInstance(300, 200, Image.SCALE_SMOOTH);
        logoImage = new JLabel(new ImageIcon(scaledImage));
   
//adding the image
    north_panel.add(logoImage);

        getContentPane().add(north_panel, BorderLayout.NORTH);

        
        //CENTRE panel, main things
        
        //making the grid layout for thr page
        JPanel center_panel = new JPanel(new GridLayout(0, 1, 0, 10));
        center_panel.setBorder(BorderFactory.createEmptyBorder(100, 100, 100, 100)); // Add padding
        
        //login button,
        JButton login = new JButton("Login");
        login.addActionListener(this);//listening waiting for command
        login.setForeground(Color.WHITE);
    login.setBorder(BorderFactory.createCompoundBorder(
    BorderFactory.createLineBorder(Color.BLUE, 2), // outer border of button
    BorderFactory.createEmptyBorder(10, 25, 10, 25) // innner padding of button
));
        //adding login to the centre panel
        center_panel.add(login);
        getContentPane().add(center_panel, BorderLayout.CENTER);
        pack();
        setVisible(true);
        setSize(500,500);
    }
    
    
    @Override
    //IF the login button is pressed, set the new page to visible.
    public void actionPerformed(ActionEvent e) {
        login_page newPageFrame = new login_page();
        newPageFrame.setVisible(true);
        this.dispose();
}
    public static void main(String[] args) {
        javax.swing.SwingUtilities.invokeLater(new Runnable() {
            public void run() {
                new SDD().setVisible(true);
            }
        });
    }
}