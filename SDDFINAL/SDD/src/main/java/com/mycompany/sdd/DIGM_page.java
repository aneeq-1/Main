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
public class DIGM_page extends JFrame implements ActionListener {  // Must extend JFrame
public DIGM_page() {
    setTitle("Data & Info Group Manager Dashboard");
        setSize(800, 600);
        JPanel north_panel = new JPanel();
        JLabel title = new JLabel("Welcome Data & Info Group Manager!");
        north_panel.add(title);
        getContentPane().add(north_panel, BorderLayout.NORTH);
        
        JPanel center_panel = new JPanel();
        center_panel.setLayout(new GridLayout(3,2,10,10));
        center_panel.setBorder(BorderFactory.createEmptyBorder(100, 100, 100, 100));
        
        JButton view_event = new JButton ("View Event");
        center_panel.add(view_event);
        getContentPane().add(center_panel, BorderLayout.CENTER);
        view_event.addActionListener(this);
        
        JButton edit_event = new JButton ("Edit Event");
        center_panel.add(edit_event);
        getContentPane().add(center_panel, BorderLayout.CENTER);
        edit_event.addActionListener(this);
        
        JButton view_analytics = new JButton ("View Analytics");
        center_panel.add(view_analytics);
        getContentPane().add(center_panel, BorderLayout.CENTER);
        view_analytics.addActionListener(this);
        
        JButton edit_analytics = new JButton ("Edit Analytics");
        center_panel.add(edit_analytics);
        getContentPane().add(center_panel, BorderLayout.CENTER);
        edit_analytics.addActionListener(this);
    
    }
    
    @Override
    public void actionPerformed(ActionEvent e) {
            String command = e.getActionCommand();
            
            if (command.equals("View Event")) {
                viewEvent_page newPageFrame = new viewEvent_page("DIGM");
                newPageFrame.setVisible(true);
            }else if (command.equals("Edit Event")) {
                editEvent_page newPageFrame = new editEvent_page("DIGM");
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