/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package com.mycompany.sdd;
import javax.swing.*;
import java.awt.*;
import java.awt.event.*;



/**
 *
 * @author apple
 */
public class DIGL_page extends JFrame implements ActionListener {
    public DIGL_page() {
        
        //title top panel and welcome message.
    setTitle("Data & Info Group Leader Dashboard");
        setSize(800, 600);
        setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        setLayout(new BorderLayout(10, 10));
        
       
        JPanel north_panel = new JPanel();
        JLabel title = new JLabel("Welcome Data & Info Group Leader!");
        north_panel.add(title);
        getContentPane().add(north_panel, BorderLayout.NORTH);
        
        
        //centre panel msain buttons and grid for buttons
        JPanel center_panel = new JPanel();
        center_panel.setLayout(new GridLayout(3,2,10,10));
        center_panel.setBorder(BorderFactory.createEmptyBorder(100, 100, 100, 100));
        
        //view event button
        JButton view_event = new JButton ("View Event");
        center_panel.add(view_event);
        getContentPane().add(center_panel, BorderLayout.CENTER);
        view_event.addActionListener(this);
        
        //edit event button
        JButton edit_event = new JButton ("Edit Event");
        center_panel.add(edit_event);
        getContentPane().add(center_panel, BorderLayout.CENTER);
        edit_event.addActionListener(this);
        
        //view analytics button
        JButton view_analytics = new JButton ("View Analytics");
        center_panel.add(view_analytics);
        getContentPane().add(center_panel, BorderLayout.CENTER);
        view_analytics.addActionListener(this);
        
        //edit analytics button
        JButton edit_analytics = new JButton ("Edit Analytics");//label for button
        center_panel.add(edit_analytics);//adding the panel
        getContentPane().add(center_panel, BorderLayout.CENTER);//button is on centre panel
        edit_analytics.addActionListener(this);//waiting for command
    
    }
    
    @Override
    public void actionPerformed(ActionEvent e) {
            String command = e.getActionCommand();
            
            //if command is this then this page visiblity becomes true 
            if (command.equals("View Event")) {
                viewEvent_page newPageFrame = new viewEvent_page("DIGL");
                newPageFrame.setVisible(true);
            }else if (command.equals("Edit Event")) {
                editEvent_page newPageFrame = new editEvent_page("DIGL");
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
