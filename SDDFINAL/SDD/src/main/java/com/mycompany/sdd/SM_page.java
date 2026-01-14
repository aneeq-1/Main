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

public class SM_page extends JFrame implements ActionListener { 
    public SM_page() {
        
        setTitle("Senior Manager Dashboard");
        setSize(800, 600);
        JPanel north_panel = new JPanel();
        JLabel title = new JLabel("Welcome Senior Manager!");
        north_panel.add(title);
        getContentPane().add(north_panel, BorderLayout.NORTH);
        
        JPanel center_panel = new JPanel();
        center_panel.setLayout(new GridLayout(3,2,10,10));
        center_panel.setBorder(BorderFactory.createEmptyBorder(100, 100, 100, 100));
        
        JButton view_event = new JButton ("View Event");
        center_panel.add(view_event);
        getContentPane().add(center_panel, BorderLayout.CENTER);
        view_event.addActionListener(this);
        
        JButton view_analytics = new JButton ("View Analytics");
        center_panel.add(view_analytics);
        getContentPane().add(center_panel, BorderLayout.CENTER);
        view_analytics.addActionListener(this);
    }
    
    @Override
    public void actionPerformed(ActionEvent e) {
            String command = e.getActionCommand();
            
            if (command.equals("View Event")) {
                viewEvent_page newPageFrame = new viewEvent_page("SM");
                newPageFrame.setVisible(true);
            }else if (command.equals("View Analytics")) {
                viewAnalytics_page newPageFrame = new viewAnalytics_page();
                newPageFrame.setVisible(true);
            }
    }
}

    

