/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package com.mycompany.sdd;
import java.awt.*;
import javax.swing.*;
import java.awt.event.*;
/**
 *
 * @author imahmo26
 */
public class AC_page extends JFrame implements ActionListener {  // Must extend JFrame
public AC_page() {
    //top panel, title and welcome message
    setTitle("Activity Coordinator Dashboard");
        setSize(800, 600);
        JPanel north_panel = new JPanel();
        JLabel title = new JLabel("Welcome Activity Coordinator!");
        north_panel.add(title);
        getContentPane().add(north_panel, BorderLayout.NORTH);
        
        
        //centre panel, grid and the main buttond on the page
        JPanel center_panel = new JPanel();
        center_panel.setLayout(new GridLayout(3,2,10,10));
        center_panel.setBorder(BorderFactory.createEmptyBorder(100, 100, 100, 100));
        
        //view event button
        JButton view_event = new JButton ("View Event");
        center_panel.add(view_event);
        getContentPane().add(center_panel, BorderLayout.CENTER);
        view_event.addActionListener(this);
        
        //editing/adding events button
        JButton edit_event = new JButton ("Edit Event");
        center_panel.add(edit_event);
        getContentPane().add(center_panel, BorderLayout.CENTER);
        edit_event.addActionListener(this);
        
        //viewing analytics button
        JButton view_analytics = new JButton ("View Analytics");
        center_panel.add(view_analytics);
        getContentPane().add(center_panel, BorderLayout.CENTER);
        view_analytics.addActionListener(this);
        
        //editing or adding analytics button
        JButton edit_analytics = new JButton ("Edit Analytics");
        center_panel.add(edit_analytics);
        getContentPane().add(center_panel, BorderLayout.CENTER);
        edit_analytics.addActionListener(this);
    
    }
    
    @Override
    //action performed links to the action listener lines on the buttons
    public void actionPerformed(ActionEvent e) {
            String command = e.getActionCommand();
            
            //if this button was pressed, make the visiblity of the corresponding page true.
            if (command.equals("View Event")) {
                viewEvent_page newPageFrame = new viewEvent_page("AC");
                newPageFrame.setVisible(true);
            }else if (command.equals("Edit Event")) {
                editEvent_page newPageFrame = new editEvent_page("AC");
                newPageFrame.setVisible(true);
            }else if (command.equals("View Analytics")) {
                viewAnalytics_page newPageFrame = new viewAnalytics_page();
                newPageFrame.setVisible(true);
            }else if (command.equals("Edit Analytics")) {
                editAnalytics_page newPageFrame = new editAnalytics_page();
                newPageFrame.setVisible(true);
            }
    }
}
